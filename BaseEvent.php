<?php

namespace Msgframework\Lib\Event;

class BaseEvent extends AbstractEvent
{
    /**
     * @var array
     */
    private array $arguments;

    /**
     * Add an event argument, only if it is not existing.
     *
     * @param string $name The argument name.
     * @param mixed $value The argument value.
     *
     * @return  self
     */
    public function addArgument(string $name, $value): self
    {
        if (!isset($this->arguments[$name])) {
            $this->arguments[$name] = $value;
        }

        return $this;
    }

    /**
     * Add argument to event.
     *
     * @param string $name Argument name.
     * @param mixed $value Value.
     *
     * @return  self
     */
    public function setArgument(string $name, $value): self
    {
        $this->arguments[$name] = $value;

        return $this;
    }

    /**
     * Remove an event argument.
     *
     * @param string $name The argument name.
     *
     * @return  mixed  The old argument value or null if it is not existing.
     */
    public function removeArgument(string $name)
    {
        $return = null;

        if (isset($this->arguments[$name])) {
            $return = $this->arguments[$name];
            unset($this->arguments[$name]);
        }

        return $return;
    }

    /**
     * Clear all event arguments.
     *
     * @return  array  The old arguments.
     */
    public function clearArguments(): array
    {
        $arguments = $this->arguments;
        $this->arguments = [];

        return $arguments;
    }

    /**
     * Set the value of an event argument.
     *
     * @param string $offset The argument name.
     * @param mixed $value The argument value.
     *
     * @return  void
     */
    public function offsetSet(string $offset, $value): void
    {
        $this->setArgument($offset, $value);
    }

    /**
     * Remove an event argument.
     *
     * @param string $offset The argument name.
     *
     * @return  void
     */
    public function offsetUnset(string $offset): void
    {
        $this->removeArgument($offset);
    }
}