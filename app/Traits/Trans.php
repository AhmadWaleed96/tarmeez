<?php

namespace App\Traits;


trait Trans
 {
/////////////////////////////////////////////name/////////////////////////////////////////////
            public function getTransNameAttribute()
            {
                if ($this->name) {

                    return json_decode($this->name , true)[app()->currentLocale()];
                }

                return $this->name;
            }

            public function getNameEnAttribute()
            {

                if ($this->name) {

                    return json_decode($this->name , true)['en'];
                }

                return '';
            }

            public function getNameArAttribute()
            {
                if ($this->name) {

                    return json_decode($this->name , true)['ar'];
                }

                return '';
            }

/////////////////////////////// description ///////////////////////////////////////////////

            public function getTransDescriptionAttribute()
            {
                if ($this->description) {

                    return json_decode($this->description , true)[app()->currentLocale()];
                }

                return $this->description;
            }

            public function getDescriptionEnAttribute()
            {

                if ($this->description) {

                    return json_decode($this->description , true)['en'];
                }

                return '';
            }

            public function getDescriptionArAttribute()
            {
                if ($this->description) {

                    return json_decode($this->description , true)['ar'];
                }

                return '';
            }


/////////////////////////////////title/////////////////////////////////////////

            public function getTransTitleAttribute()
            {
                if ($this->title) {

                    return json_decode($this->title , true)[app()->currentLocale()];
                }

                return $this->title;
            }

            public function getTitleEnAttribute()
            {

                if ($this->title) {

                    return json_decode($this->title , true)['en'];
                }

                return '';
            }

            public function getTitleArAttribute()
            {
                if ($this->title) {

                    return json_decode($this->title , true)['ar'];
                }

                return '';
            }


////////////////////////////////client/////////////////////////////////////////

            public function getTransClientAttribute()
            {
                if ($this->client) {

                    return json_decode($this->client , true)[app()->currentLocale()];
                }

                return $this->client;
            }

            public function getClientEnAttribute()
            {

                if ($this->client) {

                    return json_decode($this->client , true)['en'];
                }

                return '';
            }

            public function getClientArAttribute()
            {
                if ($this->client) {

                    return json_decode($this->client , true)['ar'];
                }

                return '';
            }

////////////////////////////////Project/////////////////////////////////////////

            public function getTransProjectAttribute()
            {
                if ($this->project) {

                    return json_decode($this->project , true)[app()->currentLocale()];
                }

                return $this->project;
            }

            public function getProjectEnAttribute()
            {

                if ($this->project) {

                    return json_decode($this->project , true)['en'];
                }

                return '';
            }

            public function getProjectArAttribute()
            {
                if ($this->project) {

                    return json_decode($this->project , true)['ar'];
                }

                return '';
            }


////////////////////////////////Detai/////////////////////////////////////////

            public function getTransLocationAttribute()
            {
                if ($this->location) {

                    return json_decode($this->location , true)[app()->currentLocale()];
                }

                return $this->location;
            }

            public function getLocationEnAttribute()
            {

                if ($this->location) {

                    return json_decode($this->location , true)['en'];
                }

                return '';
            }

            public function getLocationArAttribute()
            {
                if ($this->location) {

                    return json_decode($this->location , true)['ar'];
                }

                return '';
            }

 }
