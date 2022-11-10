<?php

namespace ContainerYir9dbp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder90da8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfeef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties95dc8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getConnection', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getMetadataFactory', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getExpressionBuilder', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'beginTransaction', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getCache', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'transactional', array('func' => $func), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'commit', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->commit();
    }

    public function rollback()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'rollback', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getClassMetadata', array('className' => $className), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'createQuery', array('dql' => $dql), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'createNamedQuery', array('name' => $name), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'createQueryBuilder', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'flush', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'clear', array('entityName' => $entityName), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->clear($entityName);
    }

    public function close()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'close', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->close();
    }

    public function persist($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'persist', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'remove', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'refresh', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'detach', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'merge', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'contains', array('entity' => $entity), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getEventManager', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getConfiguration', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'isOpen', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getUnitOfWork', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getProxyFactory', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'initializeObject', array('obj' => $obj), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'getFilters', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'isFiltersStateClean', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'hasFilters', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return $this->valueHolder90da8->hasFilters();
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

        $instance->initializerbfeef = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder90da8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder90da8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder90da8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__get', ['name' => $name], $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        if (isset(self::$publicProperties95dc8[$name])) {
            return $this->valueHolder90da8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90da8;

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

        $targetObject = $this->valueHolder90da8;
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
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90da8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder90da8;
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
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__isset', array('name' => $name), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90da8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder90da8;
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
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__unset', array('name' => $name), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90da8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder90da8;
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
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__clone', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        $this->valueHolder90da8 = clone $this->valueHolder90da8;
    }

    public function __sleep()
    {
        $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, '__sleep', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;

        return array('valueHolder90da8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbfeef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbfeef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbfeef && ($this->initializerbfeef->__invoke($valueHolder90da8, $this, 'initializeProxy', array(), $this->initializerbfeef) || 1) && $this->valueHolder90da8 = $valueHolder90da8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder90da8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder90da8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
