<?php

namespace App\Controller;

use App\Form\NewsletterType;
use App\Form\NewsletterUserType;
use App\Entity\Newsletters\Users;
use App\Entity\Newsletters\Newsletters;
use App\Repository\Newsletters\NewslettersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
#[Route('/newsletter', name: 'newsletter_')]

class NewsletterController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $em, Request $request, MailerInterface $mailer): Response
    {
            $user = new Users();
            $form = $this->createForm(NewsletterUserType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
            $token = hash('sha256', uniqid());
            $user->setValidationToken($token);
            $em->persist($user);
            $em->flush();
            $email = (new TemplatedEmail())
                ->from('newsletter@site.fr')
                ->to($user->getEmail())
                ->subject('Votre inscription à la newsletter')
                ->htmlTemplate('emails/inscription.html.twig')
                ->context(compact('user', 'token'))
                ;
                $mailer->send($email);
                
            $this->addFlash('message', 'Vous avez reçu un mail, afin de valider votre compte, merci de vous rendre sur le message reçu');
            return $this->redirectToRoute('app_home');
        }
      
        return $this->render('newsletter/index.html.twig', [
            'form' => $form->createView(),
        ]);

       
    }

    #[Route('/confirm/{id}/{token}', name: 'confirm')]

    public function confirm(EntityManagerInterface $em, Users $user, $token): Response 
    {
        if ($user->getValidationToken() != $token)
        {
            throw $this->createNotFoundException('Page non trouvé');
        }
        $user->setIsValid(true);
        $em->persist($user);
        $em->flush();
        $this->addFlash('message', 'Compte activé');
        return $this->redirectToRoute('app_home');
    }

    #[Route('/prepare', name: 'prepare')]
    public function prepare(EntityManagerInterface $em, Request $request): Response {
        $newsletter = new Newsletters();
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form-> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
        $em->persist($newsletter);
        $em->flush();

        return $this->redirectToRoute('newsletter_list');
        }
        return $this->render('newsletter/prepare.html.twig', [
           'form' => $form->createView() 
        ]);
    }

    #[Route('admin/list', name: 'list')]
    public function list(NewslettersRepository $newsletters): Response
    {
        return $this->render('newsletter/list.html.twig', [
        'newsletters' => $newsletters->findAll()
        ]);
    }

    #[Route('admin/send/{id}', name: 'send')]
    public function send(EntityManagerInterface $em, Newsletters $newsletter, MailerInterface $mailer): Response
    {
        $users= $newsletter->getCategories()->getUsers();
        
      foreach($users as $user){
            if($user->getIsValid())
             {
              $email= (new TemplatedEmail())
                    ->from('newsletter@site.fr')
                    ->to($user->getEmail())
                    ->subject($newsletter->getName())
                    ->htmlTemplate('emails/newsletter.html.twig')
                    ->context(compact('newsletter', 'user'))
                    ;
                    $mailer->send($email);
                }      
      }
      $newsletter->setIsSent(true);
      $em->persist($user);
      $em->flush();
      return $this->redirectToRoute('newsletter_list');
    }

    #[Route('/unsubscribe/{id}/{newsletter}/{token}', name: 'unsubscribe')]
    public function unsubscribe(EntityManagerInterface $em, Users $user, Newsletters $newsletter, $token): Response
    {
        if($user->getValidationToken() != $token){
            throw $this->createNotFoundException('Page non trouvée');
        }
        if(count($user->getCategories()) > 1){
          $user->removeCategory($newsletter->getCategories());
          $em->persist($user); 
        }else{
            $em->remove($user);
        }
        $em->flush();
        $this->addFlash('message', 'Newsletter supprimée');
        return $this->redirectToRoute('app_home');
    }
}
