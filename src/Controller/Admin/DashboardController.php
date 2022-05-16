<?php

namespace App\Controller\Admin;

use App\Entity\Newsletters\Users;
use App\Entity\Newsletters\Categories;
use App\Entity\Newsletters\Newsletters;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use App\Controller\Admin\CategoriesCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {

    }
    #[Route('/newsletter/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
        ->setController(CategoriesCrudController::class)
        ->generateUrl();
     return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Comperis');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::subMenu('Catégories Actions', 'fa fa-bars')->setSubItems([
             MenuItem::linkToCrud('Créer Categorie', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW),
             MenuItem::linkToCrud('Montrer Categorie', 'fas fa-plus', Categories::class)
        ]);

        yield MenuItem::subMenu(' Newsletters Actions', 'fa fa-bars')->setSubItems([
            MenuItem::linkToCrud('Créer Newsletter', 'fas fa-plus', Newsletters::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Montrer Newsletter', 'fas fa-plus', Newsletters::class)
       ]);

       yield MenuItem::subMenu(' Utilisateurs Actions', 'fa fa-bars')->setSubItems([
        MenuItem::linkToCrud('Créer Utilisateur', 'fas fa-plus', Users::class)->setAction(Crud::PAGE_NEW),
        MenuItem::linkToCrud('Montrer Utilisateur', 'fas fa-plus', Users::class)
   ]);
      // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
