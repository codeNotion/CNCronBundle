<?php

namespace CN\Bundle\CronBundle\Task;

use CN\Bundle\CronBundle\Task\TaskInterface;

class TaskPool
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = array();
    }

    public function addTask(TaskInterface  $task)
    {
        $this->tasks[] = $task;
    }
}