<?php

namespace Elephant\Enums\Contacts;

interface Presenter
{
    /**
     * Overview of Obtaining Enum Definitions.
     * 
     * @return string
     */
    public function description(): string;

    /**
     * Convert the Current Enum to a Viewable Model.
     * 
     * @param string|null $customDescription Custom Description Method.
     */
    public function toViewModel(?string $customDescription = null): array;
}
