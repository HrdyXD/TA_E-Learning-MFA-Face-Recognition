<?php

class __Mustache_a056660930be4bd290f209430528aa9e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('availablecourses');
        $buffer .= $this->sectionB2c98ef79932f2d592e05409a0f40011($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('promatedcourse');
        $buffer .= $this->section0c0b307e0d78b74a8effed0b8fac1cfb($context, $indent, $value);

        return $buffer;
    }

    private function section71352ebdd71fd6079889fd23b9fba583(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 120, {{{summary}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 120, ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfe18a4e4a9f6f9570c650d88d69cfb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="desc-block">
';
                $buffer .= $indent . '                                            <p>';
                $value = $context->find('shortentext');
                $buffer .= $this->section71352ebdd71fd6079889fd23b9fba583($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4bac0bb600b1b748d2ed47b7919b9ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="available-content">
                                <div class="available-img">
                                    <a href={{link}}>
                                        <img src="{{imgurl}}" width="249" height="200" alt={{name}}>
                                    </a>
                                </div>
                                <div class="available-info">
                                    <div class="title-block">
                                        <h6><a href={{link}}>{{name}}</a></h6>
                                    </div>
                                    {{#summary}}
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    {{/summary}}
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="available-content">
';
                $buffer .= $indent . '                                <div class="available-img">
';
                $buffer .= $indent . '                                    <a href=';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>
';
                $buffer .= $indent . '                                        <img src="';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="249" height="200" alt=';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="available-info">
';
                $buffer .= $indent . '                                    <div class="title-block">
';
                $buffer .= $indent . '                                        <h6><a href=';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h6>
';
                $buffer .= $indent . '                                    </div>
';
                $value = $context->find('summary');
                $buffer .= $this->sectionCfe18a4e4a9f6f9570c650d88d69cfb0($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2c98ef79932f2d592e05409a0f40011(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="available-courses" id="available-courses">
        <div class="available-block">
            <div class="container">
                <div class="row">
                    <div class="course-slider col-md-12" data-crow="{{totalavacount}}">
                        {{#courses}}
                            <div class="available-content">
                                <div class="available-img">
                                    <a href={{link}}>
                                        <img src="{{imgurl}}" width="249" height="200" alt={{name}}>
                                    </a>
                                </div>
                                <div class="available-info">
                                    <div class="title-block">
                                        <h6><a href={{link}}>{{name}}</a></h6>
                                    </div>
                                    {{#summary}}
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    {{/summary}}
                                </div>
                            </div>
                        {{/courses}}
                    </div>
                </div>
            </div>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="available-courses" id="available-courses">
';
                $buffer .= $indent . '        <div class="available-block">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="course-slider col-md-12" data-crow="';
                $value = $this->resolveValue($context->find('totalavacount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('courses');
                $buffer .= $this->sectionC4bac0bb600b1b748d2ed47b7919b9ac($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56f0628a53a78b8028d2b0324829f27f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blockemptymessage, theme_academi';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blockemptymessage, theme_academi';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ad6583f317972f5690975b8ed889133(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="custom-alert-block alert alert-warning">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section56f0628a53a78b8028d2b0324829f27f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section628b409ce0ee14fd65bb7a2b0870d876(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2><b>{{promotedtitle}}</b></h2>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <h2><b>';
                $value = $this->resolveValue($context->find('promotedtitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32c07498704a2444c22d8f93f044357e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p>{{promotedcoursedesc}}</p>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p>';
                $value = $this->resolveValue($context->find('promotedcoursedesc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1aee4defce689757f531bf7d1eabcc51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="titlebar">
                        {{#promotedtitle}}
                            <h2><b>{{promotedtitle}}</b></h2>
                        {{/promotedtitle}}
                        {{#promotedcoursedesc}}
                            <p>{{promotedcoursedesc}}</p>
                        {{/promotedcoursedesc}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="titlebar">
';
                $value = $context->find('promotedtitle');
                $buffer .= $this->section628b409ce0ee14fd65bb7a2b0870d876($context, $indent, $value);
                $value = $context->find('promotedcoursedesc');
                $buffer .= $this->section32c07498704a2444c22d8f93f044357e($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31541456266f5e48f9a9e47270f56de8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="slider-item">
                                    <div class="course-box">
                                        <div class="thumb">
                                            <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                        </div>
                                        <div class="info">
                                            <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="slider-item">
';
                $buffer .= $indent . '                                    <div class="course-box">
';
                $buffer .= $indent . '                                        <div class="thumb">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="135" height="135" alt=""></a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="info">
';
                $buffer .= $indent . '                                            <h5><a href="';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a></h5>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fdeb924e30adff5bce1e3500d9d4c92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#.}}
                                <div class="slider-item">
                                    <div class="course-box">
                                        <div class="thumb">
                                            <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                        </div>
                                        <div class="info">
                                            <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            {{/.}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->last('.');
                $buffer .= $this->section31541456266f5e48f9a9e47270f56de8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11700cca53759656c7a2e8242ad2e759(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="promatedcourse-slider" data-crow="{{totalfcourse}}">
                        {{#courses}}
                            {{#.}}
                                <div class="slider-item">
                                    <div class="course-box">
                                        <div class="thumb">
                                            <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                        </div>
                                        <div class="info">
                                            <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            {{/.}}
                        {{/courses}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="promatedcourse-slider" data-crow="';
                $value = $this->resolveValue($context->find('totalfcourse'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('courses');
                $buffer .= $this->section7fdeb924e30adff5bce1e3500d9d4c92($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7e1199221adc32d9c702078fc0b1d3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="promoted-courses" id="promoted-courses">
            <div class="container">
                {{#promotedcontent}}
                    <div class="titlebar">
                        {{#promotedtitle}}
                            <h2><b>{{promotedtitle}}</b></h2>
                        {{/promotedtitle}}
                        {{#promotedcoursedesc}}
                            <p>{{promotedcoursedesc}}</p>
                        {{/promotedcoursedesc}}
                    </div>
                {{/promotedcontent}}
                {{#coursestatus}}
                    <div class="promatedcourse-slider" data-crow="{{totalfcourse}}">
                        {{#courses}}
                            {{#.}}
                                <div class="slider-item">
                                    <div class="course-box">
                                        <div class="thumb">
                                            <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                        </div>
                                        <div class="info">
                                            <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            {{/.}}
                        {{/courses}}
                    </div>
                {{/coursestatus}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="promoted-courses" id="promoted-courses">
';
                $buffer .= $indent . '            <div class="container">
';
                $value = $context->find('promotedcontent');
                $buffer .= $this->section1aee4defce689757f531bf7d1eabcc51($context, $indent, $value);
                $value = $context->find('coursestatus');
                $buffer .= $this->section11700cca53759656c7a2e8242ad2e759($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c0b307e0d78b74a8effed0b8fac1cfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}

    {{#blockisempty}}
        <div class="promoted-courses" id="promoted-courses">
            <div class="container">
                {{#promotedcontent}}
                    <div class="titlebar">
                        {{#promotedtitle}}
                            <h2><b>{{promotedtitle}}</b></h2>
                        {{/promotedtitle}}
                        {{#promotedcoursedesc}}
                            <p>{{promotedcoursedesc}}</p>
                        {{/promotedcoursedesc}}
                    </div>
                {{/promotedcontent}}
                {{#coursestatus}}
                    <div class="promatedcourse-slider" data-crow="{{totalfcourse}}">
                        {{#courses}}
                            {{#.}}
                                <div class="slider-item">
                                    <div class="course-box">
                                        <div class="thumb">
                                            <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                        </div>
                                        <div class="info">
                                            <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            {{/.}}
                        {{/courses}}
                    </div>
                {{/coursestatus}}
            </div>
        </div>
    {{/blockisempty}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isblockempty');
                $buffer .= $this->section7ad6583f317972f5690975b8ed889133($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('blockisempty');
                $buffer .= $this->sectionF7e1199221adc32d9c702078fc0b1d3b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
