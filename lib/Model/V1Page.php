<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Page Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1Page implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'page_index' => 'int',
        'cells' => '\SquareConnect\Model\V1PageCell[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'page_index' => 'page_index',
        'cells' => 'cells'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'page_index' => 'setPageIndex',
        'cells' => 'setCells'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'page_index' => 'getPageIndex',
        'cells' => 'getCells'
    );
  
    /**
      * $id The page's unique identifier.
      * @var string
      */
    protected $id;
    /**
      * $name The page's name, if any.
      * @var string
      */
    protected $name;
    /**
      * $page_index The page's position in the merchant's list of pages. Always an integer between 0 and 4, inclusive.
      * @var int
      */
    protected $page_index;
    /**
      * $cells The cells included on the page.
      * @var \SquareConnect\Model\V1PageCell[]
      */
    protected $cells;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->page_index = $data["page_index"];
            $this->cells = $data["cells"];
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The page's unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The page's name, if any.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets page_index
     * @return int
     */
    public function getPageIndex()
    {
        return $this->page_index;
    }
  
    /**
     * Sets page_index
     * @param int $page_index The page's position in the merchant's list of pages. Always an integer between 0 and 4, inclusive.
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->page_index = $page_index;
        return $this;
    }
    /**
     * Gets cells
     * @return \SquareConnect\Model\V1PageCell[]
     */
    public function getCells()
    {
        return $this->cells;
    }
  
    /**
     * Sets cells
     * @param \SquareConnect\Model\V1PageCell[] $cells The cells included on the page.
     * @return $this
     */
    public function setCells($cells)
    {
        $this->cells = $cells;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}