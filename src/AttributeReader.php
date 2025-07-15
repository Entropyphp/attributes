<?php

declare(strict_types=1);

namespace Pg\Attributes;

use koriym\Attributes\AttributeReader as BaseAttributeReader;
use ReflectionClass;
use ReflectionMethod;

class AttributeReader
{
    public function __construct(private BaseAttributeReader $reader {
        get {
            return $this->reader;
        }
        set(BaseAttributeReader $value) {
            $this->reader = $value;
        }
    })
    {
    }

    /**
     * @param ReflectionMethod $method
     * @param string $attributeClassName
     * @return object|null
     */
    public function getMethodAttribute(ReflectionMethod $method, string $attributeClassName): ?object
    {
        return $this->reader->getMethodAnnotation($method, $attributeClassName);
    }

    /**
     * @param ReflectionMethod $method
     * @param string $attributeClassName
     * @return iterable|null
     */
    public function getMethodAttributes(ReflectionMethod $method, string $attributeClassName): ?iterable
    {
        $attributes = $this->reader->getMethodAnnotations($method);

        foreach ($attributes as $annotation) {
            if ($annotation instanceof $attributeClassName) {
                yield $annotation;
            }
        }
        return null;
    }

    /**
     * @param ReflectionClass $class
     * @param string $attributeClassName
     * @return object|null
     */
    public function getClassAttribute(ReflectionClass $class, string $attributeClassName): ?object
    {
        return $this->reader->getClassAnnotation($class, $attributeClassName);
    }

    /**
     * @param ReflectionClass $class
     * @param string $attributeClassName
     * @return iterable|null
     */
    public function getClassAttributes(ReflectionClass $class, string $attributeClassName): ?iterable
    {
        $attributes = $this->reader->getClassAnnotations($class);

        foreach ($attributes as $annotation) {
            if ($annotation instanceof $attributeClassName) {
                yield $annotation;
            }
        }
        return null;
    }
}
