<?php


/**
 * Base class that represents a row from the 'genres' table.
 *
 * 
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseGenre extends BaseObject  implements Persistent
{

    /**
     * Peer class name
     */
    const PEER = 'GenrePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GenrePeer
     */
    protected static $peer;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * @var        array Moviesgenres[] Collection to store aggregation of Moviesgenres objects.
     */
    protected $collMoviesgenress;

    /**
     * @var        array Movie[] Collection to store aggregation of Movie objects.
     */
    protected $collMovies;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [id] column value.
     * 
     * @return     int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [name] column value.
     * 
     * @return     string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return     Genre The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null)
        {
            $v = (int) $v;
        }

        if ($this->id !== $v)
        {
            $this->id = $v;
            $this->modifiedColumns[] = GenrePeer::ID;
        }

        return $this;
    }

    /**
     * Set the value of [name] column.
     * 
     * @param      string $v new value
     * @return     Genre The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->name !== $v)
        {
            $this->name = $v;
            $this->modifiedColumns[] = GenrePeer::NAME;
        }

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return     boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return     int next starting column
     * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try
        {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate)
            {
                $this->ensureConsistency();
            }

            return $startcol + 2; // 2 = GenrePeer::NUM_HYDRATE_COLUMNS.

        }
        catch (Exception $e)
        {
            throw new PropelException("Error populating Genre object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws     PropelException
     */
    public function ensureConsistency()
    {

    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      PropelPDO $con (optional) The PropelPDO connection to use.
     * @return     void
     * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted())
        {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew())
        {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null)
        {
            $con = Propel::getConnection(GenrePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GenrePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row)
        {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collMoviesgenress = null;

            $this->collMovies = null;
        }
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      PropelPDO $con
     * @return     void
     * @throws     PropelException
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted())
        {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null)
        {
            $con = Propel::getConnection(GenrePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try
        {
            $ret = $this->preDelete($con);
            if ($ret)
            {
                GenreQuery::create()
                    ->filterByPrimaryKey($this->getPrimaryKey())
                    ->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            }
            else
            {
                $con->commit();
            }
        }
        catch (PropelException $e)
        {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      PropelPDO $con
     * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws     PropelException
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted())
        {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null)
        {
            $con = Propel::getConnection(GenrePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try
        {
            $ret = $this->preSave($con);
            if ($isInsert)
            {
                $ret = $ret && $this->preInsert($con);
            }
            else
            {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret)
            {
                $affectedRows = $this->doSave($con);
                if ($isInsert)
                {
                    $this->postInsert($con);
                }
                else
                {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                GenrePeer::addInstanceToPool($this);
            }
            else
            {
                $affectedRows = 0;
            }
            $con->commit();
            return $affectedRows;
        }
        catch (PropelException $e)
        {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      PropelPDO $con
     * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws     PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave)
        {
            $this->alreadyInSave = true;

            if ($this->isNew() )
            {
                $this->modifiedColumns[] = GenrePeer::ID;
            }

            // If this object has been modified, then save it to the database.
            if ($this->isModified())
            {
                if ($this->isNew())
                {
                    $criteria = $this->buildCriteria();
                    if ($criteria->keyContainsValue(GenrePeer::ID) )
                    {
                        throw new PropelException('Cannot insert a value for auto-increment primary key ('.GenrePeer::ID.')');
                    }

                    $pk = BasePeer::doInsert($criteria, $con);
                    $affectedRows = 1;
                    $this->setId($pk);  //[IMV] update autoincrement primary key
                    $this->setNew(false);
                }
                else
                {
                    $affectedRows = GenrePeer::doUpdate($this, $con);
                }

                $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
            }

            if ($this->collMoviesgenress !== null)
            {
                foreach ($this->collMoviesgenress as $referrerFK)
                {
                    if (!$referrerFK->isDeleted())
                    {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }
        return $affectedRows;
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return     array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return     boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true)
        {
            $this->validationFailures = array();
            return true;
        }
        else
        {
            $this->validationFailures = $res;
            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation)
        {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = GenrePeer::doValidate($this, $columns)) !== true)
            {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collMoviesgenress !== null)
                {
                    foreach ($this->collMoviesgenress as $referrerFK)
                    {
                        if (!$referrerFK->validate($columns))
                        {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return     mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GenrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);
        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return     mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch($pos)
        {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getName();
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return    array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Genre'][$this->getPrimaryKey()]))
        {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Genre'][$this->getPrimaryKey()] = true;
        $keys = GenrePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
        );
        if ($includeForeignObjects)
        {
            if (null !== $this->collMoviesgenress)
            {
                $result['Moviesgenress'] = $this->collMoviesgenress->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }
        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return     void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GenrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return     void
     */
    public function setByPosition($pos, $value)
    {
        switch($pos)
        {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setName($value);
                break;
        }
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's phpname (e.g. 'AuthorId')
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = GenrePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GenrePeer::DATABASE_NAME);

        if ($this->isColumnModified(GenrePeer::ID)) $criteria->add(GenrePeer::ID, $this->id);
        if ($this->isColumnModified(GenrePeer::NAME)) $criteria->add(GenrePeer::NAME, $this->name);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return     Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(GenrePeer::DATABASE_NAME);
        $criteria->add(GenrePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return     int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param      int $key Primary key.
     * @return     void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return     boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Genre (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());

        if ($deepCopy)
        {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getMoviesgenress() as $relObj)
            {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMoviesgenres($relObj->copy($deepCopy));
                }
            }

        }

        if ($makeNew)
        {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return     Genre Clone of current object.
     * @throws     PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);
        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return     GenrePeer
     */
    public function getPeer()
    {
        if (self::$peer === null)
        {
            self::$peer = new GenrePeer();
        }
        return self::$peer;
    }

    /**
     * Clears out the collMoviesgenress collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     * @see        addMoviesgenress()
     */
    public function clearMoviesgenress()
    {
        $this->collMoviesgenress = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collMoviesgenress collection.
     *
     * By default this just sets the collMoviesgenress collection to an empty array (like clearcollMoviesgenress());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return     void
     */
    public function initMoviesgenress($overrideExisting = true)
    {
        if (null !== $this->collMoviesgenress && !$overrideExisting)
        {
            return;
        }
        $this->collMoviesgenress = new PropelObjectCollection();
        $this->collMoviesgenress->setModel('Moviesgenres');
    }

    /**
     * Gets an array of Moviesgenres objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Genre is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return     PropelCollection|array Moviesgenres[] List of Moviesgenres objects
     * @throws     PropelException
     */
    public function getMoviesgenress($criteria = null, PropelPDO $con = null)
    {
        if(null === $this->collMoviesgenress || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMoviesgenress)
            {
                // return empty collection
                $this->initMoviesgenress();
            }
            else
            {
                $collMoviesgenress = MoviesgenresQuery::create(null, $criteria)
                    ->filterByGenre($this)
                    ->find($con);
                if (null !== $criteria)
                {
                    return $collMoviesgenress;
                }
                $this->collMoviesgenress = $collMoviesgenress;
            }
        }
        return $this->collMoviesgenress;
    }

    /**
     * Returns the number of related Moviesgenres objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return     int Count of related Moviesgenres objects.
     * @throws     PropelException
     */
    public function countMoviesgenress(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if(null === $this->collMoviesgenress || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMoviesgenress)
            {
                return 0;
            }
            else
            {
                $query = MoviesgenresQuery::create(null, $criteria);
                if($distinct)
                {
                    $query->distinct();
                }
                return $query
                    ->filterByGenre($this)
                    ->count($con);
            }
        }
        else
        {
            return count($this->collMoviesgenress);
        }
    }

    /**
     * Method called to associate a Moviesgenres object to this object
     * through the Moviesgenres foreign key attribute.
     *
     * @param      Moviesgenres $l Moviesgenres
     * @return     void
     * @throws     PropelException
     */
    public function addMoviesgenres(Moviesgenres $l)
    {
        if ($this->collMoviesgenress === null)
        {
            $this->initMoviesgenress();
        }
        if (!$this->collMoviesgenress->contains($l)) { // only add it if the **same** object is not already associated
            $this->collMoviesgenress[]= $l;
            $l->setGenre($this);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Genre is new, it will return
     * an empty collection; or if this Genre has previously
     * been saved, it will retrieve related Moviesgenress from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Genre.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return     PropelCollection|array Moviesgenres[] List of Moviesgenres objects
     */
    public function getMoviesgenressJoinMovie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MoviesgenresQuery::create(null, $criteria);
        $query->joinWith('Movie', $join_behavior);

        return $this->getMoviesgenress($query, $con);
    }

    /**
     * Clears out the collMovies collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     * @see        addMovies()
     */
    public function clearMovies()
    {
        $this->collMovies = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collMovies collection.
     *
     * By default this just sets the collMovies collection to an empty collection (like clearMovies());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return     void
     */
    public function initMovies()
    {
        $this->collMovies = new PropelObjectCollection();
        $this->collMovies->setModel('Movie');
    }

    /**
     * Gets a collection of Movie objects related by a many-to-many relationship
     * to the current object by way of the moviesGenres cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Genre is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      PropelPDO $con Optional connection object
     *
     * @return     PropelCollection|array Movie[] List of Movie objects
     */
    public function getMovies($criteria = null, PropelPDO $con = null)
    {
        if(null === $this->collMovies || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMovies)
            {
                // return empty collection
                $this->initMovies();
            }
            else
            {
                $collMovies = MovieQuery::create(null, $criteria)
                    ->filterByGenre($this)
                    ->find($con);
                if (null !== $criteria)
                {
                    return $collMovies;
                }
                $this->collMovies = $collMovies;
            }
        }
        return $this->collMovies;
    }

    /**
     * Gets the number of Movie objects related by a many-to-many relationship
     * to the current object by way of the moviesGenres cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      PropelPDO $con Optional connection object
     *
     * @return     int the number of related Movie objects
     */
    public function countMovies($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if(null === $this->collMovies || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMovies)
            {
                return 0;
            }
            else
            {
                $query = MovieQuery::create(null, $criteria);
                if($distinct)
                {
                    $query->distinct();
                }
                return $query
                    ->filterByGenre($this)
                    ->count($con);
            }
        }
        else
        {
            return count($this->collMovies);
        }
    }

    /**
     * Associate a Movie object to this object
     * through the moviesGenres cross reference table.
     *
     * @param      Movie $movie The Moviesgenres object to relate
     * @return     void
     */
    public function addMovie($movie)
    {
        if ($this->collMovies === null)
        {
            $this->initMovies();
        }
        if (!$this->collMovies->contains($movie)) { // only add it if the **same** object is not already associated
            $moviesgenres = new Moviesgenres();
            $moviesgenres->setMovie($movie);
            $this->addMoviesgenres($moviesgenres);

            $this->collMovies[]= $movie;
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep)
        {
            if ($this->collMoviesgenress)
            {
                foreach ($this->collMoviesgenress as $o)
                {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collMovies)
            {
                foreach ($this->collMovies as $o)
                {
                    $o->clearAllReferences($deep);
                }
            }
        }

        if ($this->collMoviesgenress instanceof PropelCollection)
        {
            $this->collMoviesgenress->clearIterator();
        }
        $this->collMoviesgenress = null;
        if ($this->collMovies instanceof PropelCollection)
        {
            $this->collMovies->clearIterator();
        }
        $this->collMovies = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GenrePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        if (preg_match('/get(\w+)/', $name, $matches))
        {
            $virtualColumn = $matches[1];
            if ($this->hasVirtualColumn($virtualColumn))
            {
                return $this->getVirtualColumn($virtualColumn);
            }
            // no lcfirst in php<5.3...
            $virtualColumn[0] = strtolower($virtualColumn[0]);
            if ($this->hasVirtualColumn($virtualColumn))
            {
                return $this->getVirtualColumn($virtualColumn);
            }
        }
        return parent::__call($name, $params);
    }

}
