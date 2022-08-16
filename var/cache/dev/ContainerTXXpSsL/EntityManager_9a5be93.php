<?php

namespace ContainerTXXpSsL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd378 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere1003 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73945 = [
        
    ];

    public function getConnection()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getConnection', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getMetadataFactory', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getExpressionBuilder', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'beginTransaction', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getCache', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getCache();
    }

    public function transactional($func)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'transactional', array('func' => $func), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'wrapInTransaction', array('func' => $func), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'commit', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->commit();
    }

    public function rollback()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'rollback', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getClassMetadata', array('className' => $className), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'createQuery', array('dql' => $dql), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'createNamedQuery', array('name' => $name), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'createQueryBuilder', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'flush', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'clear', array('entityName' => $entityName), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->clear($entityName);
    }

    public function close()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'close', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->close();
    }

    public function persist($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'persist', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'remove', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'refresh', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'detach', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'merge', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getRepository', array('entityName' => $entityName), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'contains', array('entity' => $entity), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getEventManager', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getConfiguration', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'isOpen', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getUnitOfWork', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getProxyFactory', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'initializeObject', array('obj' => $obj), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'getFilters', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'isFiltersStateClean', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'hasFilters', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return $this->valueHolderfd378->hasFilters();
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

        $instance->initializere1003 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfd378) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd378 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd378->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__get', ['name' => $name], $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        if (isset(self::$publicProperties73945[$name])) {
            return $this->valueHolderfd378->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd378;

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

        $targetObject = $this->valueHolderfd378;
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
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd378;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd378;
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
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__isset', array('name' => $name), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd378;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd378;
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
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__unset', array('name' => $name), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd378;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd378;
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
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__clone', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        $this->valueHolderfd378 = clone $this->valueHolderfd378;
    }

    public function __sleep()
    {
        $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, '__sleep', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;

        return array('valueHolderfd378');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere1003 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere1003;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere1003 && ($this->initializere1003->__invoke($valueHolderfd378, $this, 'initializeProxy', array(), $this->initializere1003) || 1) && $this->valueHolderfd378 = $valueHolderfd378;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd378;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd378;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
