<?php

class Oppertunity
{
    public $interested = false; // Default false
    public $position = 'Developer'; // Default applying for developers
    public $workingHours = false; // Default false
    public $workingHome = false; // Default at the office
    public $response = ''; // Response will be assembled in this message and shown upon output

    /**
     * @param $interested
     */
    public function setInterested($interested)
    {
        $this->interested = $interested;
    }

    /**
     * @return string
     */
    public function interested()
    {
        return ($this->interested ? 'ge&iuml;nteresseerd' : 'niet ge&iuml;nteresseerd');
    }

    /**
     * @param $position
     */
    public function setPosition($position)
    {
        // Really, who are we kidding here? Using default
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function position()
    {
        return $this->position;
    }

    /**
     * @param $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
    }

    /**
     * @return integer
     */
    public function workingHours()
    {
        return $this->workingHours;
    }

    /**
     * @param $workingHome
     */
    public function setWorkingHome($workingHome)
    {
        $this->workingHome = $workingHome;
    }

    /**
     * @return string
     */
    public function workingHome()
    {
        return ($this->workingHome ? 'Met de mogelijkheid om vanaf huis te werken'
                                   : 'Zonder de mogelijkheid om vanaf huis te werken');
    }

    /**
     * Assembles response message
     */
    public function setResponse()
    {
        $this->response = "Hi, op het moment ben ik {$this->interested()} naar de functie als {$this->position()} voor 
                            {$this->workingHours()} per week. {$this->workingHome()}.";
    }

    /**
     * Outputs response message
     */
    public function response()
    {
        $this->setResponse();
        echo "<span style='font-family: tahoma'>{$this->response}</span>";
    }
}