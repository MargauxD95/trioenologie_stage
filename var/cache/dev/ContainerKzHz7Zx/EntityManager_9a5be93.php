<?php

namespace ContainerKzHz7Zx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbd358 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb97e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb22c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getConnection', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getMetadataFactory', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getExpressionBuilder', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'beginTransaction', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getCache', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getCache();
    }

    public function transactional($func)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'transactional', array('func' => $func), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'wrapInTransaction', array('func' => $func), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'commit', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->commit();
    }

    public function rollback()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'rollback', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getClassMetadata', array('className' => $className), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'createQuery', array('dql' => $dql), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'createNamedQuery', array('name' => $name), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'createQueryBuilder', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'flush', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'clear', array('entityName' => $entityName), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->clear($entityName);
    }

    public function close()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'close', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->close();
    }

    public function persist($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'persist', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'remove', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'refresh', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'detach', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'merge', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getRepository', array('entityName' => $entityName), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'contains', array('entity' => $entity), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getEventManager', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getConfiguration', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'isOpen', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getUnitOfWork', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getProxyFactory', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'initializeObject', array('obj' => $obj), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'getFilters', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'isFiltersStateClean', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'hasFilters', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return $this->valueHolderbd358->hasFilters();
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

        $instance->initializercb97e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbd358) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbd358 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbd358->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__get', ['name' => $name], $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        if (isset(self::$publicPropertiesb22c6[$name])) {
            return $this->valueHolderbd358->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd358;

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

        $targetObject = $this->valueHolderbd358;
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
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd358;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbd358;
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
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__isset', array('name' => $name), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd358;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbd358;
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
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__unset', array('name' => $name), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd358;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbd358;
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
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__clone', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        $this->valueHolderbd358 = clone $this->valueHolderbd358;
    }

    public function __sleep()
    {
        $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, '__sleep', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;

        return array('valueHolderbd358');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercb97e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercb97e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercb97e && ($this->initializercb97e->__invoke($valueHolderbd358, $this, 'initializeProxy', array(), $this->initializercb97e) || 1) && $this->valueHolderbd358 = $valueHolderbd358;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbd358;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbd358;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
