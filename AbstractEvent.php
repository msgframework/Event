<?php

namespace Msgframework\Lib\Event;

use Psr\EventDispatcher\StoppableEventInterface;

/**
 * Implementation of EventInterface.
 */
abstract class AbstractEvent implements StoppableEventInterface
{
    /**
     * A flag to see if the event propagation is stopped.
     *
     * @var    boolean
     */
    private bool $propagationStopped = false;

    /**
     * @return bool
     */
    public function isPropagationStopped(): bool
    {
        return $this->propagationStopped;
    }

    /**
     * Stops the propagation of the event to further event listeners.
     *
     * If multiple event listeners are connected to the same event, no
     * further event listener will be triggered once any trigger calls
     * stopPropagation().
     */
    public function stopPropagation(): void
    {
        $this->propagationStopped = true;
    }
}