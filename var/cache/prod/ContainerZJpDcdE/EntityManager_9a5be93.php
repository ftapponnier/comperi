<?php

namespace ContainerZJpDcdE;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder31c38 = null;
    private $initializer6c119 = null;
    private static $publicProperties5c703 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getConnection', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getMetadataFactory', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getExpressionBuilder', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'beginTransaction', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getCache', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'transactional', array('func' => $func), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'commit', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->commit();
    }
    public function rollback()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'rollback', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'createQuery', array('dql' => $dql), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'createQueryBuilder', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'flush', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'clear', array('entityName' => $entityName), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->clear($entityName);
    }
    public function close()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'close', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->close();
    }
    public function persist($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'persist', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'remove', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'refresh', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'detach', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'merge', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'contains', array('entity' => $entity), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getEventManager', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getConfiguration', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'isOpen', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getUnitOfWork', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getProxyFactory', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'getFilters', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'isFiltersStateClean', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'hasFilters', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return $this->valueHolder31c38->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6c119 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder31c38) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder31c38 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder31c38->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__get', ['name' => $name], $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        if (isset(self::$publicProperties5c703[$name])) {
            return $this->valueHolder31c38->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31c38;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder31c38;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31c38;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder31c38;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__isset', array('name' => $name), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31c38;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder31c38;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__unset', array('name' => $name), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31c38;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder31c38;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__clone', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        $this->valueHolder31c38 = clone $this->valueHolder31c38;
    }
    public function __sleep()
    {
        $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, '__sleep', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
        return array('valueHolder31c38');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c119 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c119;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6c119 && ($this->initializer6c119->__invoke($valueHolder31c38, $this, 'initializeProxy', array(), $this->initializer6c119) || 1) && $this->valueHolder31c38 = $valueHolder31c38;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31c38;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31c38;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
