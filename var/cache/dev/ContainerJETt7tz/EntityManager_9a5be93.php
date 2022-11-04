<?php

namespace ContainerJETt7tz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder73706 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer01664 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1f7c = [
        
    ];

    public function getConnection()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getConnection', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getMetadataFactory', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getExpressionBuilder', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'beginTransaction', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getCache', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getCache();
    }

    public function transactional($func)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'transactional', array('func' => $func), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'wrapInTransaction', array('func' => $func), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'commit', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->commit();
    }

    public function rollback()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'rollback', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getClassMetadata', array('className' => $className), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'createQuery', array('dql' => $dql), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'createNamedQuery', array('name' => $name), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'createQueryBuilder', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'flush', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'clear', array('entityName' => $entityName), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->clear($entityName);
    }

    public function close()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'close', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->close();
    }

    public function persist($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'persist', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'remove', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'refresh', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'detach', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'merge', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getRepository', array('entityName' => $entityName), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'contains', array('entity' => $entity), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getEventManager', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getConfiguration', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'isOpen', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getUnitOfWork', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getProxyFactory', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'initializeObject', array('obj' => $obj), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'getFilters', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'isFiltersStateClean', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'hasFilters', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return $this->valueHolder73706->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer01664 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder73706) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder73706 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder73706->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__get', ['name' => $name], $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        if (isset(self::$publicPropertiese1f7c[$name])) {
            return $this->valueHolder73706->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder73706;

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

        $targetObject = $this->valueHolder73706;
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
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder73706;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder73706;
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
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__isset', array('name' => $name), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder73706;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder73706;
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
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__unset', array('name' => $name), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder73706;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder73706;
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
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__clone', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        $this->valueHolder73706 = clone $this->valueHolder73706;
    }

    public function __sleep()
    {
        $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, '__sleep', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;

        return array('valueHolder73706');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer01664 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer01664;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer01664 && ($this->initializer01664->__invoke($valueHolder73706, $this, 'initializeProxy', array(), $this->initializer01664) || 1) && $this->valueHolder73706 = $valueHolder73706;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder73706;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder73706;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
