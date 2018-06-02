<?php

namespace Infrastructure\Service;


use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;

class SerializerService {

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * SerializeService constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function converter($json, $tipo) {
        return $this->serializer->deserialize($json, $tipo, 'json');
    }

    public function toJsonByGroups($data, array $groups = ['default']){
        return $this-> serializer-> serialize($data, 'json', SerializationContext::create()-> setGroups($groups));

    }

}