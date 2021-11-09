<?php

namespace ContainerTN0hXUU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6080c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d440 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesec5e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getConnection', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getMetadataFactory', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getExpressionBuilder', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'beginTransaction', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getCache', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'transactional', array('func' => $func), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'commit', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->commit();
    }

    public function rollback()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'rollback', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'createQuery', array('dql' => $dql), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'createQueryBuilder', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'flush', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'clear', array('entityName' => $entityName), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'close', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->close();
    }

    public function persist($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'persist', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'remove', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'refresh', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'detach', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'merge', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'contains', array('entity' => $entity), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getEventManager', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getConfiguration', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'isOpen', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getUnitOfWork', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getProxyFactory', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'getFilters', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'isFiltersStateClean', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'hasFilters', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return $this->valueHolder6080c->hasFilters();
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

        $instance->initializer7d440 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6080c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6080c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6080c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__get', ['name' => $name], $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        if (isset(self::$publicPropertiesec5e0[$name])) {
            return $this->valueHolder6080c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6080c;

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

        $targetObject = $this->valueHolder6080c;
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
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6080c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6080c;
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
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__isset', array('name' => $name), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6080c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6080c;
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
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__unset', array('name' => $name), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6080c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6080c;
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
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__clone', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        $this->valueHolder6080c = clone $this->valueHolder6080c;
    }

    public function __sleep()
    {
        $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, '__sleep', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;

        return array('valueHolder6080c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d440 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d440;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d440 && ($this->initializer7d440->__invoke($valueHolder6080c, $this, 'initializeProxy', array(), $this->initializer7d440) || 1) && $this->valueHolder6080c = $valueHolder6080c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6080c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6080c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
