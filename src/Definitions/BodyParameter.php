<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class BodyParameter extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['in' => 'body'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => ['mixed']];
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->data['description'] = $description;
        return $this;
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * The name of the parameter.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->data['name'] = $name;
        return $this;
    }
    
    /**
     * The name of the parameter.
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * Determines the location of the parameter.
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->data['in'] = $in;
        return $this;
    }
    
    /**
     * Determines the location of the parameter.
     * @return string
     */
    public function getIn()
    {
        return $this->data['in'];
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->data['required'] = $required;
        return $this;
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @return bool
     */
    public function getRequired()
    {
        return $this->data['required'];
    }
    
    /**
     * A deterministic version of a JSON Schema object.
     * @param Definitions\Schema $schema
     * @return $this
     */
    public function setSchema(Definitions\Schema $schema)
    {
        $this->data['schema'] = $schema;
        return $this;
    }
    
    /**
     * A deterministic version of a JSON Schema object.
     * @return Definitions\Schema
     */
    public function getSchema()
    {
        return $this->data['schema'];
    }
}