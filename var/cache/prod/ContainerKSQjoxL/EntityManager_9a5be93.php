<?php

namespace ContainerKSQjoxL;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4a83e = null;
    private $initializerb1fe7 = null;
    private static $publicProperties4233c = [
        
    ];
    public function getConnection()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getConnection', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getMetadataFactory', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getExpressionBuilder', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'beginTransaction', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getCache', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'transactional', array('func' => $func), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'commit', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->commit();
    }
    public function rollback()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'rollback', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'createQuery', array('dql' => $dql), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'createQueryBuilder', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'flush', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'clear', array('entityName' => $entityName), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->clear($entityName);
    }
    public function close()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'close', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->close();
    }
    public function persist($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'persist', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'remove', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'refresh', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'detach', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'merge', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'contains', array('entity' => $entity), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getEventManager', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getConfiguration', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'isOpen', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getUnitOfWork', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getProxyFactory', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'getFilters', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'isFiltersStateClean', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'hasFilters', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return $this->valueHolder4a83e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb1fe7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder4a83e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a83e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder4a83e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__get', ['name' => $name], $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        if (isset(self::$publicProperties4233c[$name])) {
            return $this->valueHolder4a83e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a83e;
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
        $targetObject = $this->valueHolder4a83e;
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
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a83e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4a83e;
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
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__isset', array('name' => $name), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a83e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4a83e;
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
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__unset', array('name' => $name), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a83e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4a83e;
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
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__clone', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        $this->valueHolder4a83e = clone $this->valueHolder4a83e;
    }
    public function __sleep()
    {
        $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, '__sleep', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
        return array('valueHolder4a83e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1fe7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1fe7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb1fe7 && ($this->initializerb1fe7->__invoke($valueHolder4a83e, $this, 'initializeProxy', array(), $this->initializerb1fe7) || 1) && $this->valueHolder4a83e = $valueHolder4a83e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a83e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a83e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
