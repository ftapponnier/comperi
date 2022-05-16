<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'LocalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'FtpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'SftpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AzureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AwsS3V2Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AwsS3V3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'CopyComConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'GridfsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'ZipConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'DropboxConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'RackspaceConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $local;
    private $ftp;
    private $sftp;
    private $azure;
    private $awsS3V2;
    private $awsS3V3;
    private $copyCom;
    private $gridfs;
    private $zip;
    private $dropbox;
    private $rackspace;
    private $_usedProperties = [];
    
    public function local(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig
    {
        if (null === $this->local) {
            $this->_usedProperties['local'] = true;
            $this->local = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "local()" has already been initialized. You cannot pass values the second time you call local().');
        }
    
        return $this->local;
    }
    
    public function ftp(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig
    {
        if (null === $this->ftp) {
            $this->_usedProperties['ftp'] = true;
            $this->ftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ftp()" has already been initialized. You cannot pass values the second time you call ftp().');
        }
    
        return $this->ftp;
    }
    
    public function sftp(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig
    {
        if (null === $this->sftp) {
            $this->_usedProperties['sftp'] = true;
            $this->sftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sftp()" has already been initialized. You cannot pass values the second time you call sftp().');
        }
    
        return $this->sftp;
    }
    
    public function azure(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig
    {
        if (null === $this->azure) {
            $this->_usedProperties['azure'] = true;
            $this->azure = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "azure()" has already been initialized. You cannot pass values the second time you call azure().');
        }
    
        return $this->azure;
    }
    
    public function awsS3V2(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config
    {
        if (null === $this->awsS3V2) {
            $this->_usedProperties['awsS3V2'] = true;
            $this->awsS3V2 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "awsS3V2()" has already been initialized. You cannot pass values the second time you call awsS3V2().');
        }
    
        return $this->awsS3V2;
    }
    
    public function awsS3V3(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config
    {
        if (null === $this->awsS3V3) {
            $this->_usedProperties['awsS3V3'] = true;
            $this->awsS3V3 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "awsS3V3()" has already been initialized. You cannot pass values the second time you call awsS3V3().');
        }
    
        return $this->awsS3V3;
    }
    
    public function copyCom(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig
    {
        if (null === $this->copyCom) {
            $this->_usedProperties['copyCom'] = true;
            $this->copyCom = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "copyCom()" has already been initialized. You cannot pass values the second time you call copyCom().');
        }
    
        return $this->copyCom;
    }
    
    public function gridfs(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig
    {
        if (null === $this->gridfs) {
            $this->_usedProperties['gridfs'] = true;
            $this->gridfs = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "gridfs()" has already been initialized. You cannot pass values the second time you call gridfs().');
        }
    
        return $this->gridfs;
    }
    
    public function zip(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig
    {
        if (null === $this->zip) {
            $this->_usedProperties['zip'] = true;
            $this->zip = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "zip()" has already been initialized. You cannot pass values the second time you call zip().');
        }
    
        return $this->zip;
    }
    
    public function dropbox(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig
    {
        if (null === $this->dropbox) {
            $this->_usedProperties['dropbox'] = true;
            $this->dropbox = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dropbox()" has already been initialized. You cannot pass values the second time you call dropbox().');
        }
    
        return $this->dropbox;
    }
    
    public function rackspace(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig
    {
        if (null === $this->rackspace) {
            $this->_usedProperties['rackspace'] = true;
            $this->rackspace = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "rackspace()" has already been initialized. You cannot pass values the second time you call rackspace().');
        }
    
        return $this->rackspace;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('local', $value)) {
            $this->_usedProperties['local'] = true;
            $this->local = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig($value['local']);
            unset($value['local']);
        }
    
        if (array_key_exists('ftp', $value)) {
            $this->_usedProperties['ftp'] = true;
            $this->ftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig($value['ftp']);
            unset($value['ftp']);
        }
    
        if (array_key_exists('sftp', $value)) {
            $this->_usedProperties['sftp'] = true;
            $this->sftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig($value['sftp']);
            unset($value['sftp']);
        }
    
        if (array_key_exists('azure', $value)) {
            $this->_usedProperties['azure'] = true;
            $this->azure = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig($value['azure']);
            unset($value['azure']);
        }
    
        if (array_key_exists('aws_s3_v2', $value)) {
            $this->_usedProperties['awsS3V2'] = true;
            $this->awsS3V2 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config($value['aws_s3_v2']);
            unset($value['aws_s3_v2']);
        }
    
        if (array_key_exists('aws_s3_v3', $value)) {
            $this->_usedProperties['awsS3V3'] = true;
            $this->awsS3V3 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config($value['aws_s3_v3']);
            unset($value['aws_s3_v3']);
        }
    
        if (array_key_exists('copy_com', $value)) {
            $this->_usedProperties['copyCom'] = true;
            $this->copyCom = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig($value['copy_com']);
            unset($value['copy_com']);
        }
    
        if (array_key_exists('gridfs', $value)) {
            $this->_usedProperties['gridfs'] = true;
            $this->gridfs = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig($value['gridfs']);
            unset($value['gridfs']);
        }
    
        if (array_key_exists('zip', $value)) {
            $this->_usedProperties['zip'] = true;
            $this->zip = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig($value['zip']);
            unset($value['zip']);
        }
    
        if (array_key_exists('dropbox', $value)) {
            $this->_usedProperties['dropbox'] = true;
            $this->dropbox = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig($value['dropbox']);
            unset($value['dropbox']);
        }
    
        if (array_key_exists('rackspace', $value)) {
            $this->_usedProperties['rackspace'] = true;
            $this->rackspace = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig($value['rackspace']);
            unset($value['rackspace']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['local'])) {
            $output['local'] = $this->local->toArray();
        }
        if (isset($this->_usedProperties['ftp'])) {
            $output['ftp'] = $this->ftp->toArray();
        }
        if (isset($this->_usedProperties['sftp'])) {
            $output['sftp'] = $this->sftp->toArray();
        }
        if (isset($this->_usedProperties['azure'])) {
            $output['azure'] = $this->azure->toArray();
        }
        if (isset($this->_usedProperties['awsS3V2'])) {
            $output['aws_s3_v2'] = $this->awsS3V2->toArray();
        }
        if (isset($this->_usedProperties['awsS3V3'])) {
            $output['aws_s3_v3'] = $this->awsS3V3->toArray();
        }
        if (isset($this->_usedProperties['copyCom'])) {
            $output['copy_com'] = $this->copyCom->toArray();
        }
        if (isset($this->_usedProperties['gridfs'])) {
            $output['gridfs'] = $this->gridfs->toArray();
        }
        if (isset($this->_usedProperties['zip'])) {
            $output['zip'] = $this->zip->toArray();
        }
        if (isset($this->_usedProperties['dropbox'])) {
            $output['dropbox'] = $this->dropbox->toArray();
        }
        if (isset($this->_usedProperties['rackspace'])) {
            $output['rackspace'] = $this->rackspace->toArray();
        }
    
        return $output;
    }

}
