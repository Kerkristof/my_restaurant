<?php

namespace Container47xsyVg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f184 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer982cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties45e5c = [
        
    ];

    public function getConnection()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getConnection', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getMetadataFactory', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getExpressionBuilder', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'beginTransaction', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getCache', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getCache();
    }

    public function transactional($func)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'transactional', array('func' => $func), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->transactional($func);
    }

    public function commit()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'commit', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->commit();
    }

    public function rollback()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'rollback', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getClassMetadata', array('className' => $className), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'createQuery', array('dql' => $dql), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'createNamedQuery', array('name' => $name), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'createQueryBuilder', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'flush', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'clear', array('entityName' => $entityName), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->clear($entityName);
    }

    public function close()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'close', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->close();
    }

    public function persist($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'persist', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'remove', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'refresh', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'detach', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'merge', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getRepository', array('entityName' => $entityName), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'contains', array('entity' => $entity), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getEventManager', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getConfiguration', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'isOpen', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getUnitOfWork', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getProxyFactory', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'initializeObject', array('obj' => $obj), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'getFilters', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'isFiltersStateClean', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'hasFilters', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return $this->valueHolder0f184->hasFilters();
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

        $instance->initializer982cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0f184) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0f184 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0f184->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__get', ['name' => $name], $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        if (isset(self::$publicProperties45e5c[$name])) {
            return $this->valueHolder0f184->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f184;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder0f184;
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
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f184;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder0f184;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__isset', array('name' => $name), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f184;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0f184;
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
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__unset', array('name' => $name), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f184;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0f184;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__clone', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        $this->valueHolder0f184 = clone $this->valueHolder0f184;
    }

    public function __sleep()
    {
        $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, '__sleep', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;

        return array('valueHolder0f184');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer982cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer982cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer982cd && ($this->initializer982cd->__invoke($valueHolder0f184, $this, 'initializeProxy', array(), $this->initializer982cd) || 1) && $this->valueHolder0f184 = $valueHolder0f184;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f184;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0f184;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
