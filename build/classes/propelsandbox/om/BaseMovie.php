<?php


/**
 * Base class that represents a row from the 'movies' table.
 *
 * 
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseMovie extends BaseObject  implements Persistent
{

    /**
     * Peer class name
     */
    const PEER = 'MoviePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MoviePeer
     */
    protected static $peer;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the parentid field.
     * @var        int
     */
    protected $parentid;

    /**
     * The value for the originaltitle field.
     * @var        string
     */
    protected $originaltitle;

    /**
     * The value for the originalsubtitle field.
     * @var        string
     */
    protected $originalsubtitle;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the subtitle field.
     * @var        string
     */
    protected $subtitle;

    /**
     * The value for the startdate field.
     * @var        string
     */
    protected $startdate;

    /**
     * The value for the fsk field.
     * @var        int
     */
    protected $fsk;

    /**
     * The value for the directors field.
     * @var        string
     */
    protected $directors;

    /**
     * The value for the actors field.
     * @var        string
     */
    protected $actors;

    /**
     * The value for the camera field.
     * @var        string
     */
    protected $camera;

    /**
     * The value for the book field.
     * @var        string
     */
    protected $book;

    /**
     * The value for the rental field.
     * @var        string
     */
    protected $rental;

    /**
     * The value for the producers field.
     * @var        string
     */
    protected $producers;

    /**
     * The value for the lengthinminutes field.
     * @var        int
     */
    protected $lengthinminutes;

    /**
     * The value for the createdate field.
     * @var        string
     */
    protected $createdate;

    /**
     * The value for the picture field.
     * @var        string
     */
    protected $picture;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the languages field.
     * @var        string
     */
    protected $languages;

    /**
     * The value for the countries field.
     * @var        string
     */
    protected $countries;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the trailer field.
     * @var        string
     */
    protected $trailer;

    /**
     * The value for the lastedittime field.
     * @var        int
     */
    protected $lastedittime;

    /**
     * @var        array Moviesgenres[] Collection to store aggregation of Moviesgenres objects.
     */
    protected $collMoviesgenress;

    /**
     * @var        array Moviespersons[] Collection to store aggregation of Moviespersons objects.
     */
    protected $collMoviespersonss;

    /**
     * @var        array Genre[] Collection to store aggregation of Genre objects.
     */
    protected $collGenres;

    /**
     * @var        array Person[] Collection to store aggregation of Person objects.
     */
    protected $collPersons;

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
     * Get the [parentid] column value.
     * 
     * @return     int
     */
    public function getParentId()
    {
        return $this->parentid;
    }

    /**
     * Get the [originaltitle] column value.
     * 
     * @return     string
     */
    public function getOriginalTitle()
    {
        return $this->originaltitle;
    }

    /**
     * Get the [originalsubtitle] column value.
     * 
     * @return     string
     */
    public function getOriginalSubtitle()
    {
        return $this->originalsubtitle;
    }

    /**
     * Get the [title] column value.
     * 
     * @return     string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the [subtitle] column value.
     * 
     * @return     string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Get the [optionally formatted] temporal [startdate] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws     PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartDate($format = '%x')
    {
        if ($this->startdate === null)
        {
            return null;
        }


        if ($this->startdate === '0000-00-00')
        {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        }
        else
        {
            try
            {
                $dt = new DateTime($this->startdate);
            }
            catch (Exception $x)
            {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startdate, true), $x);
            }
        }

        if ($format === null)
        {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        }
        elseif (strpos($format, '%') !== false)
        {
            return strftime($format, $dt->format('U'));
        }
        else
        {
            return $dt->format($format);
        }
    }

    /**
     * Get the [fsk] column value.
     * 
     * @return     int
     */
    public function getFsk()
    {
        return $this->fsk;
    }

    /**
     * Get the [directors] column value.
     * 
     * @return     string
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * Get the [actors] column value.
     * 
     * @return     string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Get the [camera] column value.
     * 
     * @return     string
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * Get the [book] column value.
     * 
     * @return     string
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Get the [rental] column value.
     * 
     * @return     string
     */
    public function getRental()
    {
        return $this->rental;
    }

    /**
     * Get the [producers] column value.
     * 
     * @return     string
     */
    public function getProducers()
    {
        return $this->producers;
    }

    /**
     * Get the [lengthinminutes] column value.
     * 
     * @return     int
     */
    public function getLengthInMinutes()
    {
        return $this->lengthinminutes;
    }

    /**
     * Get the [optionally formatted] temporal [createdate] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws     PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateDate($format = '%x')
    {
        if ($this->createdate === null)
        {
            return null;
        }


        if ($this->createdate === '0000-00-00')
        {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        }
        else
        {
            try
            {
                $dt = new DateTime($this->createdate);
            }
            catch (Exception $x)
            {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->createdate, true), $x);
            }
        }

        if ($format === null)
        {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        }
        elseif (strpos($format, '%') !== false)
        {
            return strftime($format, $dt->format('U'));
        }
        else
        {
            return $dt->format($format);
        }
    }

    /**
     * Get the [picture] column value.
     * 
     * @return     string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get the [description] column value.
     * 
     * @return     string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [languages] column value.
     * 
     * @return     string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Get the [countries] column value.
     * 
     * @return     string
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Get the [url] column value.
     * 
     * @return     string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get the [trailer] column value.
     * 
     * @return     string
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Get the [lastedittime] column value.
     * 
     * @return     int
     */
    public function getLastEditTime()
    {
        return $this->lastedittime;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return     Movie The current object (for fluent API support)
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
            $this->modifiedColumns[] = MoviePeer::ID;
        }

        return $this;
    }

    /**
     * Set the value of [parentid] column.
     * 
     * @param      int $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setParentId($v)
    {
        if ($v !== null)
        {
            $v = (int) $v;
        }

        if ($this->parentid !== $v)
        {
            $this->parentid = $v;
            $this->modifiedColumns[] = MoviePeer::PARENTID;
        }

        return $this;
    }

    /**
     * Set the value of [originaltitle] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setOriginalTitle($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->originaltitle !== $v)
        {
            $this->originaltitle = $v;
            $this->modifiedColumns[] = MoviePeer::ORIGINALTITLE;
        }

        return $this;
    }

    /**
     * Set the value of [originalsubtitle] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setOriginalSubtitle($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->originalsubtitle !== $v)
        {
            $this->originalsubtitle = $v;
            $this->modifiedColumns[] = MoviePeer::ORIGINALSUBTITLE;
        }

        return $this;
    }

    /**
     * Set the value of [title] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->title !== $v)
        {
            $this->title = $v;
            $this->modifiedColumns[] = MoviePeer::TITLE;
        }

        return $this;
    }

    /**
     * Set the value of [subtitle] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setSubtitle($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->subtitle !== $v)
        {
            $this->subtitle = $v;
            $this->modifiedColumns[] = MoviePeer::SUBTITLE;
        }

        return $this;
    }

    /**
     * Sets the value of [startdate] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return     Movie The current object (for fluent API support)
     */
    public function setStartDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->startdate !== null || $dt !== null)
        {
            $currentDateAsString = ($this->startdate !== null && $tmpDt = new DateTime($this->startdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString)
            {
                $this->startdate = $newDateAsString;
                $this->modifiedColumns[] = MoviePeer::STARTDATE;
            }
        }

        return $this;
    }

    /**
     * Set the value of [fsk] column.
     * 
     * @param      int $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setFsk($v)
    {
        if ($v !== null)
        {
            $v = (int) $v;
        }

        if ($this->fsk !== $v)
        {
            $this->fsk = $v;
            $this->modifiedColumns[] = MoviePeer::FSK;
        }

        return $this;
    }

    /**
     * Set the value of [directors] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setDirectors($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->directors !== $v)
        {
            $this->directors = $v;
            $this->modifiedColumns[] = MoviePeer::DIRECTORS;
        }

        return $this;
    }

    /**
     * Set the value of [actors] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setActors($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->actors !== $v)
        {
            $this->actors = $v;
            $this->modifiedColumns[] = MoviePeer::ACTORS;
        }

        return $this;
    }

    /**
     * Set the value of [camera] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setCamera($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->camera !== $v)
        {
            $this->camera = $v;
            $this->modifiedColumns[] = MoviePeer::CAMERA;
        }

        return $this;
    }

    /**
     * Set the value of [book] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setBook($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->book !== $v)
        {
            $this->book = $v;
            $this->modifiedColumns[] = MoviePeer::BOOK;
        }

        return $this;
    }

    /**
     * Set the value of [rental] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setRental($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->rental !== $v)
        {
            $this->rental = $v;
            $this->modifiedColumns[] = MoviePeer::RENTAL;
        }

        return $this;
    }

    /**
     * Set the value of [producers] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setProducers($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->producers !== $v)
        {
            $this->producers = $v;
            $this->modifiedColumns[] = MoviePeer::PRODUCERS;
        }

        return $this;
    }

    /**
     * Set the value of [lengthinminutes] column.
     * 
     * @param      int $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setLengthInMinutes($v)
    {
        if ($v !== null)
        {
            $v = (int) $v;
        }

        if ($this->lengthinminutes !== $v)
        {
            $this->lengthinminutes = $v;
            $this->modifiedColumns[] = MoviePeer::LENGTHINMINUTES;
        }

        return $this;
    }

    /**
     * Sets the value of [createdate] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return     Movie The current object (for fluent API support)
     */
    public function setCreateDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->createdate !== null || $dt !== null)
        {
            $currentDateAsString = ($this->createdate !== null && $tmpDt = new DateTime($this->createdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString)
            {
                $this->createdate = $newDateAsString;
                $this->modifiedColumns[] = MoviePeer::CREATEDATE;
            }
        }

        return $this;
    }

    /**
     * Set the value of [picture] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setPicture($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->picture !== $v)
        {
            $this->picture = $v;
            $this->modifiedColumns[] = MoviePeer::PICTURE;
        }

        return $this;
    }

    /**
     * Set the value of [description] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->description !== $v)
        {
            $this->description = $v;
            $this->modifiedColumns[] = MoviePeer::DESCRIPTION;
        }

        return $this;
    }

    /**
     * Set the value of [languages] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setLanguages($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->languages !== $v)
        {
            $this->languages = $v;
            $this->modifiedColumns[] = MoviePeer::LANGUAGES;
        }

        return $this;
    }

    /**
     * Set the value of [countries] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setCountries($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->countries !== $v)
        {
            $this->countries = $v;
            $this->modifiedColumns[] = MoviePeer::COUNTRIES;
        }

        return $this;
    }

    /**
     * Set the value of [url] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->url !== $v)
        {
            $this->url = $v;
            $this->modifiedColumns[] = MoviePeer::URL;
        }

        return $this;
    }

    /**
     * Set the value of [trailer] column.
     * 
     * @param      string $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setTrailer($v)
    {
        if ($v !== null)
        {
            $v = (string) $v;
        }

        if ($this->trailer !== $v)
        {
            $this->trailer = $v;
            $this->modifiedColumns[] = MoviePeer::TRAILER;
        }

        return $this;
    }

    /**
     * Set the value of [lastedittime] column.
     * 
     * @param      int $v new value
     * @return     Movie The current object (for fluent API support)
     */
    public function setLastEditTime($v)
    {
        if ($v !== null)
        {
            $v = (int) $v;
        }

        if ($this->lastedittime !== $v)
        {
            $this->lastedittime = $v;
            $this->modifiedColumns[] = MoviePeer::LASTEDITTIME;
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
            $this->parentid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->originaltitle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->originalsubtitle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->subtitle = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->startdate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->fsk = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->directors = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->actors = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->camera = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->book = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->rental = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->producers = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->lengthinminutes = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->createdate = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->picture = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->description = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->languages = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->countries = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->url = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->trailer = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->lastedittime = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate)
            {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = MoviePeer::NUM_HYDRATE_COLUMNS.

        }
        catch (Exception $e)
        {
            throw new PropelException("Error populating Movie object", $e);
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
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MoviePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row)
        {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collMoviesgenress = null;

            $this->collMoviespersonss = null;

            $this->collGenres = null;
            $this->collPersons = null;
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
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try
        {
            $ret = $this->preDelete($con);
            if ($ret)
            {
                MovieQuery::create()
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
            $con = Propel::getConnection(MoviePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MoviePeer::addInstanceToPool($this);
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
                $this->modifiedColumns[] = MoviePeer::ID;
            }

            // If this object has been modified, then save it to the database.
            if ($this->isModified())
            {
                if ($this->isNew())
                {
                    $criteria = $this->buildCriteria();
                    if ($criteria->keyContainsValue(MoviePeer::ID) )
                    {
                        throw new PropelException('Cannot insert a value for auto-increment primary key ('.MoviePeer::ID.')');
                    }

                    $pk = BasePeer::doInsert($criteria, $con);
                    $affectedRows = 1;
                    $this->setId($pk);  //[IMV] update autoincrement primary key
                    $this->setNew(false);
                }
                else
                {
                    $affectedRows = MoviePeer::doUpdate($this, $con);
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

            if ($this->collMoviespersonss !== null)
            {
                foreach ($this->collMoviespersonss as $referrerFK)
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


            if (($retval = MoviePeer::doValidate($this, $columns)) !== true)
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

                if ($this->collMoviespersonss !== null)
                {
                    foreach ($this->collMoviespersonss as $referrerFK)
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
        $pos = MoviePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getParentId();
                break;
            case 2:
                return $this->getOriginalTitle();
                break;
            case 3:
                return $this->getOriginalSubtitle();
                break;
            case 4:
                return $this->getTitle();
                break;
            case 5:
                return $this->getSubtitle();
                break;
            case 6:
                return $this->getStartDate();
                break;
            case 7:
                return $this->getFsk();
                break;
            case 8:
                return $this->getDirectors();
                break;
            case 9:
                return $this->getActors();
                break;
            case 10:
                return $this->getCamera();
                break;
            case 11:
                return $this->getBook();
                break;
            case 12:
                return $this->getRental();
                break;
            case 13:
                return $this->getProducers();
                break;
            case 14:
                return $this->getLengthInMinutes();
                break;
            case 15:
                return $this->getCreateDate();
                break;
            case 16:
                return $this->getPicture();
                break;
            case 17:
                return $this->getDescription();
                break;
            case 18:
                return $this->getLanguages();
                break;
            case 19:
                return $this->getCountries();
                break;
            case 20:
                return $this->getUrl();
                break;
            case 21:
                return $this->getTrailer();
                break;
            case 22:
                return $this->getLastEditTime();
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
        if (isset($alreadyDumpedObjects['Movie'][$this->getPrimaryKey()]))
        {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Movie'][$this->getPrimaryKey()] = true;
        $keys = MoviePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getParentId(),
            $keys[2] => $this->getOriginalTitle(),
            $keys[3] => $this->getOriginalSubtitle(),
            $keys[4] => $this->getTitle(),
            $keys[5] => $this->getSubtitle(),
            $keys[6] => $this->getStartDate(),
            $keys[7] => $this->getFsk(),
            $keys[8] => $this->getDirectors(),
            $keys[9] => $this->getActors(),
            $keys[10] => $this->getCamera(),
            $keys[11] => $this->getBook(),
            $keys[12] => $this->getRental(),
            $keys[13] => $this->getProducers(),
            $keys[14] => $this->getLengthInMinutes(),
            $keys[15] => $this->getCreateDate(),
            $keys[16] => $this->getPicture(),
            $keys[17] => $this->getDescription(),
            $keys[18] => $this->getLanguages(),
            $keys[19] => $this->getCountries(),
            $keys[20] => $this->getUrl(),
            $keys[21] => $this->getTrailer(),
            $keys[22] => $this->getLastEditTime(),
        );
        if ($includeForeignObjects)
        {
            if (null !== $this->collMoviesgenress)
            {
                $result['Moviesgenress'] = $this->collMoviesgenress->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMoviespersonss)
            {
                $result['Moviespersonss'] = $this->collMoviespersonss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MoviePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                $this->setParentId($value);
                break;
            case 2:
                $this->setOriginalTitle($value);
                break;
            case 3:
                $this->setOriginalSubtitle($value);
                break;
            case 4:
                $this->setTitle($value);
                break;
            case 5:
                $this->setSubtitle($value);
                break;
            case 6:
                $this->setStartDate($value);
                break;
            case 7:
                $this->setFsk($value);
                break;
            case 8:
                $this->setDirectors($value);
                break;
            case 9:
                $this->setActors($value);
                break;
            case 10:
                $this->setCamera($value);
                break;
            case 11:
                $this->setBook($value);
                break;
            case 12:
                $this->setRental($value);
                break;
            case 13:
                $this->setProducers($value);
                break;
            case 14:
                $this->setLengthInMinutes($value);
                break;
            case 15:
                $this->setCreateDate($value);
                break;
            case 16:
                $this->setPicture($value);
                break;
            case 17:
                $this->setDescription($value);
                break;
            case 18:
                $this->setLanguages($value);
                break;
            case 19:
                $this->setCountries($value);
                break;
            case 20:
                $this->setUrl($value);
                break;
            case 21:
                $this->setTrailer($value);
                break;
            case 22:
                $this->setLastEditTime($value);
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
        $keys = MoviePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setParentId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOriginalTitle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOriginalSubtitle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSubtitle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStartDate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFsk($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDirectors($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setActors($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCamera($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBook($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRental($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProducers($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLengthInMinutes($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCreateDate($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPicture($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDescription($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLanguages($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setCountries($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setUrl($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTrailer($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLastEditTime($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MoviePeer::DATABASE_NAME);

        if ($this->isColumnModified(MoviePeer::ID)) $criteria->add(MoviePeer::ID, $this->id);
        if ($this->isColumnModified(MoviePeer::PARENTID)) $criteria->add(MoviePeer::PARENTID, $this->parentid);
        if ($this->isColumnModified(MoviePeer::ORIGINALTITLE)) $criteria->add(MoviePeer::ORIGINALTITLE, $this->originaltitle);
        if ($this->isColumnModified(MoviePeer::ORIGINALSUBTITLE)) $criteria->add(MoviePeer::ORIGINALSUBTITLE, $this->originalsubtitle);
        if ($this->isColumnModified(MoviePeer::TITLE)) $criteria->add(MoviePeer::TITLE, $this->title);
        if ($this->isColumnModified(MoviePeer::SUBTITLE)) $criteria->add(MoviePeer::SUBTITLE, $this->subtitle);
        if ($this->isColumnModified(MoviePeer::STARTDATE)) $criteria->add(MoviePeer::STARTDATE, $this->startdate);
        if ($this->isColumnModified(MoviePeer::FSK)) $criteria->add(MoviePeer::FSK, $this->fsk);
        if ($this->isColumnModified(MoviePeer::DIRECTORS)) $criteria->add(MoviePeer::DIRECTORS, $this->directors);
        if ($this->isColumnModified(MoviePeer::ACTORS)) $criteria->add(MoviePeer::ACTORS, $this->actors);
        if ($this->isColumnModified(MoviePeer::CAMERA)) $criteria->add(MoviePeer::CAMERA, $this->camera);
        if ($this->isColumnModified(MoviePeer::BOOK)) $criteria->add(MoviePeer::BOOK, $this->book);
        if ($this->isColumnModified(MoviePeer::RENTAL)) $criteria->add(MoviePeer::RENTAL, $this->rental);
        if ($this->isColumnModified(MoviePeer::PRODUCERS)) $criteria->add(MoviePeer::PRODUCERS, $this->producers);
        if ($this->isColumnModified(MoviePeer::LENGTHINMINUTES)) $criteria->add(MoviePeer::LENGTHINMINUTES, $this->lengthinminutes);
        if ($this->isColumnModified(MoviePeer::CREATEDATE)) $criteria->add(MoviePeer::CREATEDATE, $this->createdate);
        if ($this->isColumnModified(MoviePeer::PICTURE)) $criteria->add(MoviePeer::PICTURE, $this->picture);
        if ($this->isColumnModified(MoviePeer::DESCRIPTION)) $criteria->add(MoviePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(MoviePeer::LANGUAGES)) $criteria->add(MoviePeer::LANGUAGES, $this->languages);
        if ($this->isColumnModified(MoviePeer::COUNTRIES)) $criteria->add(MoviePeer::COUNTRIES, $this->countries);
        if ($this->isColumnModified(MoviePeer::URL)) $criteria->add(MoviePeer::URL, $this->url);
        if ($this->isColumnModified(MoviePeer::TRAILER)) $criteria->add(MoviePeer::TRAILER, $this->trailer);
        if ($this->isColumnModified(MoviePeer::LASTEDITTIME)) $criteria->add(MoviePeer::LASTEDITTIME, $this->lastedittime);

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
        $criteria = new Criteria(MoviePeer::DATABASE_NAME);
        $criteria->add(MoviePeer::ID, $this->id);

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
     * @param      object $copyObj An object of Movie (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setParentId($this->getParentId());
        $copyObj->setOriginalTitle($this->getOriginalTitle());
        $copyObj->setOriginalSubtitle($this->getOriginalSubtitle());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setSubtitle($this->getSubtitle());
        $copyObj->setStartDate($this->getStartDate());
        $copyObj->setFsk($this->getFsk());
        $copyObj->setDirectors($this->getDirectors());
        $copyObj->setActors($this->getActors());
        $copyObj->setCamera($this->getCamera());
        $copyObj->setBook($this->getBook());
        $copyObj->setRental($this->getRental());
        $copyObj->setProducers($this->getProducers());
        $copyObj->setLengthInMinutes($this->getLengthInMinutes());
        $copyObj->setCreateDate($this->getCreateDate());
        $copyObj->setPicture($this->getPicture());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setLanguages($this->getLanguages());
        $copyObj->setCountries($this->getCountries());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setTrailer($this->getTrailer());
        $copyObj->setLastEditTime($this->getLastEditTime());

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

            foreach ($this->getMoviespersonss() as $relObj)
            {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMoviespersons($relObj->copy($deepCopy));
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
     * @return     Movie Clone of current object.
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
     * @return     MoviePeer
     */
    public function getPeer()
    {
        if (self::$peer === null)
        {
            self::$peer = new MoviePeer();
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
     * If this Movie is new, it will return
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
                    ->filterByMovie($this)
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
                    ->filterByMovie($this)
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
            $l->setMovie($this);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Movie is new, it will return
     * an empty collection; or if this Movie has previously
     * been saved, it will retrieve related Moviesgenress from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Movie.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return     PropelCollection|array Moviesgenres[] List of Moviesgenres objects
     */
    public function getMoviesgenressJoinGenre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MoviesgenresQuery::create(null, $criteria);
        $query->joinWith('Genre', $join_behavior);

        return $this->getMoviesgenress($query, $con);
    }

    /**
     * Clears out the collMoviespersonss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     * @see        addMoviespersonss()
     */
    public function clearMoviespersonss()
    {
        $this->collMoviespersonss = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collMoviespersonss collection.
     *
     * By default this just sets the collMoviespersonss collection to an empty array (like clearcollMoviespersonss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return     void
     */
    public function initMoviespersonss($overrideExisting = true)
    {
        if (null !== $this->collMoviespersonss && !$overrideExisting)
        {
            return;
        }
        $this->collMoviespersonss = new PropelObjectCollection();
        $this->collMoviespersonss->setModel('Moviespersons');
    }

    /**
     * Gets an array of Moviespersons objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Movie is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return     PropelCollection|array Moviespersons[] List of Moviespersons objects
     * @throws     PropelException
     */
    public function getMoviespersonss($criteria = null, PropelPDO $con = null)
    {
        if(null === $this->collMoviespersonss || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMoviespersonss)
            {
                // return empty collection
                $this->initMoviespersonss();
            }
            else
            {
                $collMoviespersonss = MoviespersonsQuery::create(null, $criteria)
                    ->filterByMovie($this)
                    ->find($con);
                if (null !== $criteria)
                {
                    return $collMoviespersonss;
                }
                $this->collMoviespersonss = $collMoviespersonss;
            }
        }
        return $this->collMoviespersonss;
    }

    /**
     * Returns the number of related Moviespersons objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return     int Count of related Moviespersons objects.
     * @throws     PropelException
     */
    public function countMoviespersonss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if(null === $this->collMoviespersonss || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collMoviespersonss)
            {
                return 0;
            }
            else
            {
                $query = MoviespersonsQuery::create(null, $criteria);
                if($distinct)
                {
                    $query->distinct();
                }
                return $query
                    ->filterByMovie($this)
                    ->count($con);
            }
        }
        else
        {
            return count($this->collMoviespersonss);
        }
    }

    /**
     * Method called to associate a Moviespersons object to this object
     * through the Moviespersons foreign key attribute.
     *
     * @param      Moviespersons $l Moviespersons
     * @return     void
     * @throws     PropelException
     */
    public function addMoviespersons(Moviespersons $l)
    {
        if ($this->collMoviespersonss === null)
        {
            $this->initMoviespersonss();
        }
        if (!$this->collMoviespersonss->contains($l)) { // only add it if the **same** object is not already associated
            $this->collMoviespersonss[]= $l;
            $l->setMovie($this);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Movie is new, it will return
     * an empty collection; or if this Movie has previously
     * been saved, it will retrieve related Moviespersonss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Movie.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return     PropelCollection|array Moviespersons[] List of Moviespersons objects
     */
    public function getMoviespersonssJoinPerson($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MoviespersonsQuery::create(null, $criteria);
        $query->joinWith('Person', $join_behavior);

        return $this->getMoviespersonss($query, $con);
    }

    /**
     * Clears out the collGenres collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     * @see        addGenres()
     */
    public function clearGenres()
    {
        $this->collGenres = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collGenres collection.
     *
     * By default this just sets the collGenres collection to an empty collection (like clearGenres());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return     void
     */
    public function initGenres()
    {
        $this->collGenres = new PropelObjectCollection();
        $this->collGenres->setModel('Genre');
    }

    /**
     * Gets a collection of Genre objects related by a many-to-many relationship
     * to the current object by way of the moviesGenres cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Movie is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      PropelPDO $con Optional connection object
     *
     * @return     PropelCollection|array Genre[] List of Genre objects
     */
    public function getGenres($criteria = null, PropelPDO $con = null)
    {
        if(null === $this->collGenres || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collGenres)
            {
                // return empty collection
                $this->initGenres();
            }
            else
            {
                $collGenres = GenreQuery::create(null, $criteria)
                    ->filterByMovie($this)
                    ->find($con);
                if (null !== $criteria)
                {
                    return $collGenres;
                }
                $this->collGenres = $collGenres;
            }
        }
        return $this->collGenres;
    }

    /**
     * Gets the number of Genre objects related by a many-to-many relationship
     * to the current object by way of the moviesGenres cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      PropelPDO $con Optional connection object
     *
     * @return     int the number of related Genre objects
     */
    public function countGenres($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if(null === $this->collGenres || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collGenres)
            {
                return 0;
            }
            else
            {
                $query = GenreQuery::create(null, $criteria);
                if($distinct)
                {
                    $query->distinct();
                }
                return $query
                    ->filterByMovie($this)
                    ->count($con);
            }
        }
        else
        {
            return count($this->collGenres);
        }
    }

    /**
     * Associate a Genre object to this object
     * through the moviesGenres cross reference table.
     *
     * @param      Genre $genre The Moviesgenres object to relate
     * @return     void
     */
    public function addGenre($genre)
    {
        if ($this->collGenres === null)
        {
            $this->initGenres();
        }
        if (!$this->collGenres->contains($genre)) { // only add it if the **same** object is not already associated
            $moviesgenres = new Moviesgenres();
            $moviesgenres->setGenre($genre);
            $this->addMoviesgenres($moviesgenres);

            $this->collGenres[]= $genre;
        }
    }

    /**
     * Clears out the collPersons collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     * @see        addPersons()
     */
    public function clearPersons()
    {
        $this->collPersons = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collPersons collection.
     *
     * By default this just sets the collPersons collection to an empty collection (like clearPersons());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return     void
     */
    public function initPersons()
    {
        $this->collPersons = new PropelObjectCollection();
        $this->collPersons->setModel('Person');
    }

    /**
     * Gets a collection of Person objects related by a many-to-many relationship
     * to the current object by way of the moviesPersons cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Movie is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      PropelPDO $con Optional connection object
     *
     * @return     PropelCollection|array Person[] List of Person objects
     */
    public function getPersons($criteria = null, PropelPDO $con = null)
    {
        if(null === $this->collPersons || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collPersons)
            {
                // return empty collection
                $this->initPersons();
            }
            else
            {
                $collPersons = PersonQuery::create(null, $criteria)
                    ->filterByMovie($this)
                    ->find($con);
                if (null !== $criteria)
                {
                    return $collPersons;
                }
                $this->collPersons = $collPersons;
            }
        }
        return $this->collPersons;
    }

    /**
     * Gets the number of Person objects related by a many-to-many relationship
     * to the current object by way of the moviesPersons cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      PropelPDO $con Optional connection object
     *
     * @return     int the number of related Person objects
     */
    public function countPersons($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if(null === $this->collPersons || null !== $criteria)
        {
            if ($this->isNew() && null === $this->collPersons)
            {
                return 0;
            }
            else
            {
                $query = PersonQuery::create(null, $criteria);
                if($distinct)
                {
                    $query->distinct();
                }
                return $query
                    ->filterByMovie($this)
                    ->count($con);
            }
        }
        else
        {
            return count($this->collPersons);
        }
    }

    /**
     * Associate a Person object to this object
     * through the moviesPersons cross reference table.
     *
     * @param      Person $person The Moviespersons object to relate
     * @return     void
     */
    public function addPerson($person)
    {
        if ($this->collPersons === null)
        {
            $this->initPersons();
        }
        if (!$this->collPersons->contains($person)) { // only add it if the **same** object is not already associated
            $moviespersons = new Moviespersons();
            $moviespersons->setPerson($person);
            $this->addMoviespersons($moviespersons);

            $this->collPersons[]= $person;
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->parentid = null;
        $this->originaltitle = null;
        $this->originalsubtitle = null;
        $this->title = null;
        $this->subtitle = null;
        $this->startdate = null;
        $this->fsk = null;
        $this->directors = null;
        $this->actors = null;
        $this->camera = null;
        $this->book = null;
        $this->rental = null;
        $this->producers = null;
        $this->lengthinminutes = null;
        $this->createdate = null;
        $this->picture = null;
        $this->description = null;
        $this->languages = null;
        $this->countries = null;
        $this->url = null;
        $this->trailer = null;
        $this->lastedittime = null;
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
            if ($this->collMoviespersonss)
            {
                foreach ($this->collMoviespersonss as $o)
                {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGenres)
            {
                foreach ($this->collGenres as $o)
                {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPersons)
            {
                foreach ($this->collPersons as $o)
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
        if ($this->collMoviespersonss instanceof PropelCollection)
        {
            $this->collMoviespersonss->clearIterator();
        }
        $this->collMoviespersonss = null;
        if ($this->collGenres instanceof PropelCollection)
        {
            $this->collGenres->clearIterator();
        }
        $this->collGenres = null;
        if ($this->collPersons instanceof PropelCollection)
        {
            $this->collPersons->clearIterator();
        }
        $this->collPersons = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MoviePeer::DEFAULT_STRING_FORMAT);
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
