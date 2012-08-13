<?php


/**
 * Base static class for performing query and update operations on the 'movies' table.
 *
 * 
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseMoviePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propelsandbox';

    /** the table name for this class */
    const TABLE_NAME = 'movies';

    /** the related Propel class for this table */
    const OM_CLASS = 'Movie';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'propelsandbox.Movie';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MovieTableMap';
    
    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the ID field */
    const ID = 'movies.ID';

    /** the column name for the PARENTID field */
    const PARENTID = 'movies.PARENTID';

    /** the column name for the ORIGINALTITLE field */
    const ORIGINALTITLE = 'movies.ORIGINALTITLE';

    /** the column name for the ORIGINALSUBTITLE field */
    const ORIGINALSUBTITLE = 'movies.ORIGINALSUBTITLE';

    /** the column name for the TITLE field */
    const TITLE = 'movies.TITLE';

    /** the column name for the SUBTITLE field */
    const SUBTITLE = 'movies.SUBTITLE';

    /** the column name for the STARTDATE field */
    const STARTDATE = 'movies.STARTDATE';

    /** the column name for the FSK field */
    const FSK = 'movies.FSK';

    /** the column name for the DIRECTORS field */
    const DIRECTORS = 'movies.DIRECTORS';

    /** the column name for the ACTORS field */
    const ACTORS = 'movies.ACTORS';

    /** the column name for the CAMERA field */
    const CAMERA = 'movies.CAMERA';

    /** the column name for the BOOK field */
    const BOOK = 'movies.BOOK';

    /** the column name for the RENTAL field */
    const RENTAL = 'movies.RENTAL';

    /** the column name for the PRODUCERS field */
    const PRODUCERS = 'movies.PRODUCERS';

    /** the column name for the LENGTHINMINUTES field */
    const LENGTHINMINUTES = 'movies.LENGTHINMINUTES';

    /** the column name for the CREATEDATE field */
    const CREATEDATE = 'movies.CREATEDATE';

    /** the column name for the PICTURE field */
    const PICTURE = 'movies.PICTURE';

    /** the column name for the DESCRIPTION field */
    const DESCRIPTION = 'movies.DESCRIPTION';

    /** the column name for the LANGUAGES field */
    const LANGUAGES = 'movies.LANGUAGES';

    /** the column name for the COUNTRIES field */
    const COUNTRIES = 'movies.COUNTRIES';

    /** the column name for the URL field */
    const URL = 'movies.URL';

    /** the column name for the TRAILER field */
    const TRAILER = 'movies.TRAILER';

    /** the column name for the LASTEDITTIME field */
    const LASTEDITTIME = 'movies.LASTEDITTIME';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';
    
    /**
     * An identiy map to hold any loaded instances of Movie objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Movie[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'ParentId', 'OriginalTitle', 'OriginalSubtitle', 'Title', 'Subtitle', 'StartDate', 'Fsk', 'Directors', 'Actors', 'Camera', 'Book', 'Rental', 'Producers', 'LengthInMinutes', 'CreateDate', 'Picture', 'Description', 'Languages', 'Countries', 'Url', 'Trailer', 'LastEditTime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'parentId', 'originalTitle', 'originalSubtitle', 'title', 'subtitle', 'startDate', 'fsk', 'directors', 'actors', 'camera', 'book', 'rental', 'producers', 'lengthInMinutes', 'createDate', 'picture', 'description', 'languages', 'countries', 'url', 'trailer', 'lastEditTime', ),
        BasePeer::TYPE_COLNAME => array (self::ID, self::PARENTID, self::ORIGINALTITLE, self::ORIGINALSUBTITLE, self::TITLE, self::SUBTITLE, self::STARTDATE, self::FSK, self::DIRECTORS, self::ACTORS, self::CAMERA, self::BOOK, self::RENTAL, self::PRODUCERS, self::LENGTHINMINUTES, self::CREATEDATE, self::PICTURE, self::DESCRIPTION, self::LANGUAGES, self::COUNTRIES, self::URL, self::TRAILER, self::LASTEDITTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PARENTID', 'ORIGINALTITLE', 'ORIGINALSUBTITLE', 'TITLE', 'SUBTITLE', 'STARTDATE', 'FSK', 'DIRECTORS', 'ACTORS', 'CAMERA', 'BOOK', 'RENTAL', 'PRODUCERS', 'LENGTHINMINUTES', 'CREATEDATE', 'PICTURE', 'DESCRIPTION', 'LANGUAGES', 'COUNTRIES', 'URL', 'TRAILER', 'LASTEDITTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'parentId', 'originalTitle', 'originalSubtitle', 'title', 'subtitle', 'startDate', 'fsk', 'directors', 'actors', 'camera', 'book', 'rental', 'producers', 'lengthInMinutes', 'createDate', 'picture', 'description', 'languages', 'countries', 'url', 'trailer', 'lastEditTime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ParentId' => 1, 'OriginalTitle' => 2, 'OriginalSubtitle' => 3, 'Title' => 4, 'Subtitle' => 5, 'StartDate' => 6, 'Fsk' => 7, 'Directors' => 8, 'Actors' => 9, 'Camera' => 10, 'Book' => 11, 'Rental' => 12, 'Producers' => 13, 'LengthInMinutes' => 14, 'CreateDate' => 15, 'Picture' => 16, 'Description' => 17, 'Languages' => 18, 'Countries' => 19, 'Url' => 20, 'Trailer' => 21, 'LastEditTime' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'parentId' => 1, 'originalTitle' => 2, 'originalSubtitle' => 3, 'title' => 4, 'subtitle' => 5, 'startDate' => 6, 'fsk' => 7, 'directors' => 8, 'actors' => 9, 'camera' => 10, 'book' => 11, 'rental' => 12, 'producers' => 13, 'lengthInMinutes' => 14, 'createDate' => 15, 'picture' => 16, 'description' => 17, 'languages' => 18, 'countries' => 19, 'url' => 20, 'trailer' => 21, 'lastEditTime' => 22, ),
        BasePeer::TYPE_COLNAME => array (self::ID => 0, self::PARENTID => 1, self::ORIGINALTITLE => 2, self::ORIGINALSUBTITLE => 3, self::TITLE => 4, self::SUBTITLE => 5, self::STARTDATE => 6, self::FSK => 7, self::DIRECTORS => 8, self::ACTORS => 9, self::CAMERA => 10, self::BOOK => 11, self::RENTAL => 12, self::PRODUCERS => 13, self::LENGTHINMINUTES => 14, self::CREATEDATE => 15, self::PICTURE => 16, self::DESCRIPTION => 17, self::LANGUAGES => 18, self::COUNTRIES => 19, self::URL => 20, self::TRAILER => 21, self::LASTEDITTIME => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PARENTID' => 1, 'ORIGINALTITLE' => 2, 'ORIGINALSUBTITLE' => 3, 'TITLE' => 4, 'SUBTITLE' => 5, 'STARTDATE' => 6, 'FSK' => 7, 'DIRECTORS' => 8, 'ACTORS' => 9, 'CAMERA' => 10, 'BOOK' => 11, 'RENTAL' => 12, 'PRODUCERS' => 13, 'LENGTHINMINUTES' => 14, 'CREATEDATE' => 15, 'PICTURE' => 16, 'DESCRIPTION' => 17, 'LANGUAGES' => 18, 'COUNTRIES' => 19, 'URL' => 20, 'TRAILER' => 21, 'LASTEDITTIME' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'parentId' => 1, 'originalTitle' => 2, 'originalSubtitle' => 3, 'title' => 4, 'subtitle' => 5, 'startDate' => 6, 'fsk' => 7, 'directors' => 8, 'actors' => 9, 'camera' => 10, 'book' => 11, 'rental' => 12, 'producers' => 13, 'lengthInMinutes' => 14, 'createDate' => 15, 'picture' => 16, 'description' => 17, 'languages' => 18, 'countries' => 19, 'url' => 20, 'trailer' => 21, 'lastEditTime' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null)
        {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames))
        {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *        $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *        $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. MoviePeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MoviePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias)
        {
            $criteria->addSelectColumn(MoviePeer::ID);
            $criteria->addSelectColumn(MoviePeer::PARENTID);
            $criteria->addSelectColumn(MoviePeer::ORIGINALTITLE);
            $criteria->addSelectColumn(MoviePeer::ORIGINALSUBTITLE);
            $criteria->addSelectColumn(MoviePeer::TITLE);
            $criteria->addSelectColumn(MoviePeer::SUBTITLE);
            $criteria->addSelectColumn(MoviePeer::STARTDATE);
            $criteria->addSelectColumn(MoviePeer::FSK);
            $criteria->addSelectColumn(MoviePeer::DIRECTORS);
            $criteria->addSelectColumn(MoviePeer::ACTORS);
            $criteria->addSelectColumn(MoviePeer::CAMERA);
            $criteria->addSelectColumn(MoviePeer::BOOK);
            $criteria->addSelectColumn(MoviePeer::RENTAL);
            $criteria->addSelectColumn(MoviePeer::PRODUCERS);
            $criteria->addSelectColumn(MoviePeer::LENGTHINMINUTES);
            $criteria->addSelectColumn(MoviePeer::CREATEDATE);
            $criteria->addSelectColumn(MoviePeer::PICTURE);
            $criteria->addSelectColumn(MoviePeer::DESCRIPTION);
            $criteria->addSelectColumn(MoviePeer::LANGUAGES);
            $criteria->addSelectColumn(MoviePeer::COUNTRIES);
            $criteria->addSelectColumn(MoviePeer::URL);
            $criteria->addSelectColumn(MoviePeer::TRAILER);
            $criteria->addSelectColumn(MoviePeer::LASTEDITTIME);
        }
        else
        {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.PARENTID');
            $criteria->addSelectColumn($alias . '.ORIGINALTITLE');
            $criteria->addSelectColumn($alias . '.ORIGINALSUBTITLE');
            $criteria->addSelectColumn($alias . '.TITLE');
            $criteria->addSelectColumn($alias . '.SUBTITLE');
            $criteria->addSelectColumn($alias . '.STARTDATE');
            $criteria->addSelectColumn($alias . '.FSK');
            $criteria->addSelectColumn($alias . '.DIRECTORS');
            $criteria->addSelectColumn($alias . '.ACTORS');
            $criteria->addSelectColumn($alias . '.CAMERA');
            $criteria->addSelectColumn($alias . '.BOOK');
            $criteria->addSelectColumn($alias . '.RENTAL');
            $criteria->addSelectColumn($alias . '.PRODUCERS');
            $criteria->addSelectColumn($alias . '.LENGTHINMINUTES');
            $criteria->addSelectColumn($alias . '.CREATEDATE');
            $criteria->addSelectColumn($alias . '.PICTURE');
            $criteria->addSelectColumn($alias . '.DESCRIPTION');
            $criteria->addSelectColumn($alias . '.LANGUAGES');
            $criteria->addSelectColumn($alias . '.COUNTRIES');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.TRAILER');
            $criteria->addSelectColumn($alias . '.LASTEDITTIME');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MoviePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
        {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause())
        {
            MoviePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            $count = (int) $row[0];
        }
        else
        {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();
        return $count;
    }
    /**
     * Method to select one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return     Movie
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MoviePeer::doSelect($critcopy, $con);
        if ($objects)
        {
            return $objects[0];
        }
        return null;
    }
    /**
     * Method to do selects.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return MoviePeer::populateObjects(MoviePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return     PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause())
        {
            $criteria = clone $criteria;
            MoviePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Movie $value A Movie object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled())
        {
            if ($key === null)
            {
                $key = (string) $obj->getId();
            }
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Movie object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null)
        {
            if (is_object($value) && $value instanceof Movie)
            {
                $key = (string) $value->getId();
            }
            elseif (is_scalar($value))
            {
                // assume we've been passed a primary key
                $key = (string) $value;
            }
            else
            {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Movie object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return     Movie Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled())
        {
            if (isset(self::$instances[$key]))
            {
                return self::$instances[$key];
            }
        }
        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return     void
     */
    public static function clearInstancePool()
    {
        self::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to movies
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[$startcol] === null)
        {
            return null;
        }
        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row 
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return     mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {
        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = MoviePeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            $key = MoviePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MoviePeer::getInstanceFromPool($key)))
            {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            }
            else
            {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MoviePeer::addInstanceToPool($obj, $key);
            }
        }
        $stmt->closeCursor();
        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return     array (Movie object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MoviePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MoviePeer::getInstanceFromPool($key)))
        {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MoviePeer::NUM_HYDRATE_COLUMNS;
        }
        else
        {
            $cls = MoviePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MoviePeer::addInstanceToPool($obj, $key);
        }
        return array($obj, $col);
    }
    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMoviePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMoviePeer::TABLE_NAME))
      {
        $dbMap->addTableObject(new MovieTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param      boolean $withPrefix Whether or not to return the path with the class name
     * @return     string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? MoviePeer::CLASS_DEFAULT : MoviePeer::OM_CLASS;
    }

    /**
     * Method perform an INSERT on the database, given a Movie or Criteria object.
     *
     * @param      mixed $values Criteria or Movie object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria)
        {
            $criteria = clone $values; // rename for clarity
        }
        else
        {
            $criteria = $values->buildCriteria(); // build Criteria from Movie object
        }

        if ($criteria->containsKey(MoviePeer::ID) && $criteria->keyContainsValue(MoviePeer::ID) )
        {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MoviePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try
        {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        }
        catch(PropelException $e)
        {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Method perform an UPDATE on the database, given a Movie or Criteria object.
     *
     * @param      mixed $values Criteria or Movie object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria)
        {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MoviePeer::ID);
            $value = $criteria->remove(MoviePeer::ID);
            if ($value)
            {
                $selectCriteria->add(MoviePeer::ID, $value, $comparison);
            }
            else
            {
                $selectCriteria->setPrimaryTableName(MoviePeer::TABLE_NAME);
            }

        } else { // $values is Movie object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the movies table.
     *
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll($con = null)
    {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try
        {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MoviePeer::TABLE_NAME, $con, MoviePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MoviePeer::clearInstancePool();
            MoviePeer::clearRelatedInstancePool();
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
     * Method perform a DELETE on the database, given a Movie or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Movie object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return     int     The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria)
        {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MoviePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Movie) { // it's a model object
            // invalidate the cache for this single object
            MoviePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(MoviePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval)
            {
                MoviePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try
        {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            MoviePeer::clearRelatedInstancePool();
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
     * Validates all modified columns of given Movie object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Movie $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols)
        {
            $dbMap = Propel::getDatabaseMap(MoviePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MoviePeer::TABLE_NAME);

            if (! is_array($cols))
            {
                $cols = array($cols);
            }

            foreach ($cols as $colName)
            {
                if ($tableMap->containsColumn($colName))
                {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        }
        else
        {

        }

        return BasePeer::doValidate(MoviePeer::DATABASE_NAME, MoviePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     Movie
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MoviePeer::getInstanceFromPool((string) $pk)))
        {
            return $obj;
        }

        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MoviePeer::DATABASE_NAME);
        $criteria->add(MoviePeer::ID, $pk);

        $v = MoviePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null)
        {
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks))
        {
            $objs = array();
        }
        else
        {
            $criteria = new Criteria(MoviePeer::DATABASE_NAME);
            $criteria->add(MoviePeer::ID, $pks, Criteria::IN);
            $objs = MoviePeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMoviePeer::buildTableMap();

