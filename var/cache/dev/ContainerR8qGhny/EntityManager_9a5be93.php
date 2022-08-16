<?php

namespace ContainerR8qGhny;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb718 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbdac8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7761e = [
        
    ];

    public function getConnection()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getConnection', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getMetadataFactory', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getExpressionBuilder', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'beginTransaction', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getCache', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'transactional', array('func' => $func), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'commit', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->commit();
    }

    public function rollback()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'rollback', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getClassMetadata', array('className' => $className), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'createQuery', array('dql' => $dql), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'createNamedQuery', array('name' => $name), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'createQueryBuilder', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'flush', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'clear', array('entityName' => $entityName), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->clear($entityName);
    }

    public function close()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'close', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->close();
    }

    public function persist($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'persist', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'remove', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'refresh', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'detach', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'merge', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'contains', array('entity' => $entity), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getEventManager', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getConfiguration', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'isOpen', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getUnitOfWork', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getProxyFactory', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'initializeObject', array('obj' => $obj), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'getFilters', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'isFiltersStateClean', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'hasFilters', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return $this->valueHoldereb718->hasFilters();
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

        $instance->initializerbdac8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereb718) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb718 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereb718->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__get', ['name' => $name], $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        if (isset(self::$publicProperties7761e[$name])) {
            return $this->valueHoldereb718->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb718;

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

        $targetObject = $this->valueHoldereb718;
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
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb718;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb718;
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
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__isset', array('name' => $name), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb718;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb718;
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
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__unset', array('name' => $name), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb718;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb718;
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
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__clone', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        $this->valueHoldereb718 = clone $this->valueHoldereb718;
    }

    public function __sleep()
    {
        $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, '__sleep', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;

        return array('valueHoldereb718');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbdac8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbdac8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbdac8 && ($this->initializerbdac8->__invoke($valueHoldereb718, $this, 'initializeProxy', array(), $this->initializerbdac8) || 1) && $this->valueHoldereb718 = $valueHoldereb718;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb718;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb718;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
