<?php

namespace App\Forms;

class BaseForm extends \Phalcon\Forms\Form
{

    public function renderDecorated($name)
    {
        $field ='';
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());
        if ($element->getLabel()) {
            $field .= '<p>';
            $field .= '<label for="'. $element->getName(). '">'. $element->getLabel(). '</label> <br />';
            $field .= $element;
            $field .= '</p>';
        } else {
            $field .= $element;
        }
        if (count($messages)) {
            //Print each element
            $field .= '<div class="text-danger">';
            foreach ($messages as $message) {
                $field .= $message.'<br />';
            }
            $field .= '</div>';
        }

        return $field;
    }

    public function renderMessage($name)
    {
        $field ='';
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());

        $field .= $element;

        if (count($messages)) {
            //Print each element
            $field .= '<div class="text-danger">';
            foreach ($messages as $message) {
                $field .= $message.'<br />';
            }
            $field .= '</div>';
        }

        return $field;
    }

    public function renderCheck($name, $options = array('Sim', 'Não'))
    {
        $field ='';
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());

        $field .= '<p class="admin-form">';
        $field .= '<label for="'. $element->getName(). '">'. $element->getLabel(). '</label> <br />';
        $field .= '<label class="block mt15 switch switch-primary">';
        $field .= $element;
        $field .= '<label data-off="'.$options[1].'" data-on="'.$options[0].'" for="'. $element->getName(). '"></label>';
        $field .= '</label>';
        $field .= '</p>';

        if (count($messages)) {
            //Print each element
            $field .= '<div class="text-danger">';
            foreach ($messages as $message) {
                $field .= $message.'<br />';
            }
            $field .= '</div>';
        }

        return $field;
    }

    public function renderDate($name)
    {
        $field ='';
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());

        $field .= '<p class="admin-form">';
        $field .= '<label for="'. $element->getName(). '">'. $element->getLabel(). '</label> <br />';
        $field .= '<label class="field prepend-icon" for="'. $element->getName(). '">';
        $field .= $element;
        $field .= '<label class="field-icon"><i class="fa fa-calendar-o"></i>';
        $field .= '</label>';
        $field .= '</p>';

        if (count($messages)) {
            //Print each element
            $field .= '<div class="text-danger">';
            foreach ($messages as $message) {
                $field .= $message.'<br />';
            }
            $field .= '</div>';
        }

        return $field;
    }

    public function renderTags($name)
    {
        $field ='';
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());
        $attr = $element->getAttributes();

        $field .= '<p>';
        $field .= '<label for="'. $element->getName(). '">'. $element->getLabel(). '</label> <br />';
        $field .= $element;
        $field .= '<div class="tag-container tags '.$attr['rel'].'"></div>';
        $field .= '</p>';

        if (count($messages)) {
            //Print each element
            $field .= '<div class="text-danger">';
            foreach ($messages as $message) {
                $field .= $message.'<br />';
            }
            $field .= '</div>';
        }

        return $field;
    }
}
