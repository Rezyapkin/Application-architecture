<?php

namespace task1;

class HandHunter {

    public function __construct() {
        $this->vacancy = [];
        $this->subscribers = [];
    }

    public function addVacancy(Vacancy $vacancy) {
        if (!in_array($vacancy, $this->vacancy)) {
            $this->vanacy[] = $vacancy;
            $this->notifyVacancy($vacancy);
        }
    }

    private function notifyVacancy($vacancy) {
        if (!array_key_exists((string)$vacancy->typeVacancy, $this->subscribers)) {
            return;
        }

        foreach ($this->subscribers[(string)$vacancy->typeVacancy] as $subscriber) {
            $subscriber->sendEmail("Новая вакансия '{$vacancy->typeVacancy}': {$vacancy->description}");
        }
    }

    public function subscribe(Applicant $applicant, TypeVacancy $typeVacancy) {
        if (!array_key_exists((string)$typeVacancy, $this->subscribers)) {
            $this->subscribers[(string)$typeVacancy] = [];
        }

        if (!in_array($applicant, $this->subscribers[(string)$typeVacancy])) {
            $this->subscribers[(string)$typeVacancy][] = $applicant;            
        } 
    }

    public function describe(Applicant $applicant, TypeVacancy $typeVacancy) {
        if (array_key_exists((string)$typeVacancy, $this->subscribers)) {
            foreach ($this->subscribers[(string)$typeVacancy] as $key => $value) {
                if ($value === $applicant) {
                    unset($this->subscribers[(string)$typeVacancy][$key]);
                }
            }    
        }
    }

}