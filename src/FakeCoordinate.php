<?php
namespace frombenj\App;
class FakeCoordinate
{
    private ?array $coordinates;


    function getCoordinates(): ?array
    {
        return [1, 2];
    }
}
