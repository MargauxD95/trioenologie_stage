<?php

namespace ContainerRgD7lqK;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2db43 = null;
    private $initializer705e8 = null;
    private static $publicPropertiesa4077 = [
        
    ];
    public function getConnection()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getConnection', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getMetadataFactory', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getExpressionBuilder', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'beginTransaction', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getCache', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getCache();
    }
    public function transactional($func)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'transactional', array('func' => $func), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'wrapInTransaction', array('func' => $func), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'commit', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->commit();
    }
    public function rollback()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'rollback', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getClassMetadata', array('className' => $className), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'createQuery', array('dql' => $dql), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'createNamedQuery', array('name' => $name), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'createQueryBuilder', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'flush', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'clear', array('entityName' => $entityName), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->clear($entityName);
    }
    public function close()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'close', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->close();
    }
    public function persist($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'persist', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'remove', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'refresh', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'detach', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'merge', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getRepository', array('entityName' => $entityName), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'contains', array('entity' => $entity), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getEventManager', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getConfiguration', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'isOpen', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getUnitOfWork', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getProxyFactory', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'initializeObject', array('obj' => $obj), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'getFilters', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'isFiltersStateClean', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'hasFilters', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return $this->valueHolder2db43->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer705e8 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder2db43) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2db43 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2db43->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__get', ['name' => $name], $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        if (isset(self::$publicPropertiesa4077[$name])) {
            return $this->valueHolder2db43->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2db43;
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
        $targetObject = $this->valueHolder2db43;
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
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2db43;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2db43;
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
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__isset', array('name' => $name), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2db43;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2db43;
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
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__unset', array('name' => $name), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2db43;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2db43;
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
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__clone', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        $this->valueHolder2db43 = clone $this->valueHolder2db43;
    }
    public function __sleep()
    {
        $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, '__sleep', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
        return array('valueHolder2db43');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer705e8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer705e8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer705e8 && ($this->initializer705e8->__invoke($valueHolder2db43, $this, 'initializeProxy', array(), $this->initializer705e8) || 1) && $this->valueHolder2db43 = $valueHolder2db43;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2db43;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2db43;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
