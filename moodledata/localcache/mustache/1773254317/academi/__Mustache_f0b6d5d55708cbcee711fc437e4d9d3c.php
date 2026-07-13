<?php

class __Mustache_f0b6d5d55708cbcee711fc437e4d9d3c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="completion-dialog px-2">
';
        $value = $context->find('hasconditions');
        $buffer .= $this->sectionF91e9c14fa926ecb698aad0947a2e33e($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasconditions');
        if (empty($value)) {
            
            $value = $context->find('istrackeduser');
            $buffer .= $this->sectionE8f08b99bc16854a177f656d348461e3($context, $indent, $value);
            $value = $context->find('istrackeduser');
            if (empty($value)) {
                
                $buffer .= $indent . '            <span class="text-danger">';
                $value = $context->find('pix');
                $buffer .= $this->sectionDaff92a9981ce87d7a15605f23834b00($context, $indent, $value);
                $value = $context->find('str');
                $buffer .= $this->section47f1d4b5fa68ba560c45e5d474a320ba($context, $indent, $value);
                $buffer .= '</span>
';
            }
        }
        $buffer .= $indent . '
';
        $value = $context->find('editing');
        $buffer .= $this->section7f47775b0d614f0c3905486338158642($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0ac537db8a2d7da79ebe287ea4ee2def(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'youmust, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'youmust, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf68b041e87d0a6b210484a6a9e3d059(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <strong>{{#str}}youmust, completion{{/str}}</strong>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <strong>';
                $value = $context->find('str');
                $buffer .= $this->section0ac537db8a2d7da79ebe287ea4ee2def($context, $indent, $value);
                $buffer .= '</strong>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bcd79789e022caa91886dd480a9edee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'studentsmust, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'studentsmust, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1e1ed08cf218e44355173df914a0f1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{.}}" aria-label="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaa615c60ed0f0ee22847ec6dd5c6af1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ee307b8c48447630945c918a4d275a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:done, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:done, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB67cc9fe4bf80dd5ff2031ef5611bb1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-flex mt-2 text-success" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/checked{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:done, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-flex mt-2 text-success" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->sectionE1e1ed08cf218e44355173df914a0f1f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionAaa615c60ed0f0ee22847ec6dd5c6af1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section4ee307b8c48447630945c918a4d275a7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <span>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section416c9f9e2a9534007ec1f8711ea14706(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/cancel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8543523334d2fb6475b6b6e248a6f0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:failed, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:failed, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7b287b8a7796e4f1cd280069fbe6f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-flex mt-2 text-danger" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}e/cancel{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:failed, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-flex mt-2 text-danger" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->sectionE1e1ed08cf218e44355173df914a0f1f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section416c9f9e2a9534007ec1f8711ea14706($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionC8543523334d2fb6475b6b6e248a6f0f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <span>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section221878e2df0a268433f08da71c702c72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/dot';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/dot';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section599533857fc3ed42fa4108b4c0e2f019(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:todo, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:todo, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bda591afa6d37e3c7a0fbdfb8be8b10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-flex mt-2" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/dot{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:todo, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-flex mt-2" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->sectionE1e1ed08cf218e44355173df914a0f1f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section221878e2df0a268433f08da71c702c72($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section599533857fc3ed42fa4108b4c0e2f019($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <span>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE435492cd6eabed815dd96ed074d3857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#statuscomplete}}
                    <div class="d-flex mt-2 text-success" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/checked{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:done, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscomplete}}
                    {{#statuscompletefail}}
                    <div class="d-flex mt-2 text-danger" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}e/cancel{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:failed, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscompletefail}}
                    {{#statusincomplete}}
                    <div class="d-flex mt-2" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/dot{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:todo, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statusincomplete}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('statuscomplete');
                $buffer .= $this->sectionB67cc9fe4bf80dd5ff2031ef5611bb1c($context, $indent, $value);
                $value = $context->find('statuscompletefail');
                $buffer .= $this->section2d7b287b8a7796e4f1cd280069fbe6f7($context, $indent, $value);
                $value = $context->find('statusincomplete');
                $buffer .= $this->section2bda591afa6d37e3c7a0fbdfb8be8b10($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section965ce740508a52052434a44b144cfbb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{! Show completion status and description to tracked users. }}
                {{#istrackeduser}}
                    {{#statuscomplete}}
                    <div class="d-flex mt-2 text-success" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/checked{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:done, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscomplete}}
                    {{#statuscompletefail}}
                    <div class="d-flex mt-2 text-danger" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}e/cancel{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:failed, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscompletefail}}
                    {{#statusincomplete}}
                    <div class="d-flex mt-2" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/dot{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:todo, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statusincomplete}}
                {{/istrackeduser}}

                {{! Show only description (without status) to non-tracked users. }}
                {{^istrackeduser}}
                    <div class="d-flex mt-2" role="listitem">
                        <div>{{#pix}}i/dot{{/pix}}</div>
                        <span>{{description}}</span>
                    </div>
                {{/istrackeduser}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istrackeduser');
                $buffer .= $this->sectionE435492cd6eabed815dd96ed074d3857($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('istrackeduser');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <div class="d-flex mt-2" role="listitem">
';
                    $buffer .= $indent . '                        <div>';
                    $value = $context->find('pix');
                    $buffer .= $this->section221878e2df0a268433f08da71c702c72($context, $indent, $value);
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                        <span>';
                    $value = $this->resolveValue($context->find('description'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section448e18140949629a4c17dbabe7973cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:markdone, core_course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completion_manual:markdone, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b9816c747835009aac76863ac5e06fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^istrackeduser}}
                    <div class="d-flex mt-2" role="listitem">
                        <div>{{#pix}}i/dot{{/pix}}</div>
                        <span>{{#str}} completion_manual:markdone, core_course {{/str}}</span>
                    </div>
                {{/istrackeduser}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istrackeduser');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <div class="d-flex mt-2" role="listitem">
';
                    $buffer .= $indent . '                        <div>';
                    $value = $context->find('pix');
                    $buffer .= $this->section221878e2df0a268433f08da71c702c72($context, $indent, $value);
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                        <span>';
                    $value = $context->find('str');
                    $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF91e9c14fa926ecb698aad0947a2e33e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! Dialog header. }}
        {{#istrackeduser}}
            <strong>{{#str}}youmust, completion{{/str}}</strong>
        {{/istrackeduser}}
        {{^istrackeduser}}
            <strong>{{#str}}studentsmust, completion{{/str}}</strong>
        {{/istrackeduser}}

        <div class="ms-2" role="list">
            {{#completiondetails}}
                {{! Show completion status and description to tracked users. }}
                {{#istrackeduser}}
                    {{#statuscomplete}}
                    <div class="d-flex mt-2 text-success" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/checked{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:done, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscomplete}}
                    {{#statuscompletefail}}
                    <div class="d-flex mt-2 text-danger" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}e/cancel{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:failed, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statuscompletefail}}
                    {{#statusincomplete}}
                    <div class="d-flex mt-2" role="listitem" {{#accessibledescription}}title="{{.}}" aria-label="{{.}}"{{/accessibledescription}}>
                        <div>
                            {{#pix}}i/dot{{/pix}}
                            <span class="sr-only">{{#str}}completion_automatic:todo, core_course{{/str}}</span>
                        </div>
                        <span>{{description}}</span>
                    </div>
                    {{/statusincomplete}}
                {{/istrackeduser}}

                {{! Show only description (without status) to non-tracked users. }}
                {{^istrackeduser}}
                    <div class="d-flex mt-2" role="listitem">
                        <div>{{#pix}}i/dot{{/pix}}</div>
                        <span>{{description}}</span>
                    </div>
                {{/istrackeduser}}
            {{/completiondetails}}

            {{! Show also manual completion description in the list to non-tracked users. }}
            {{#ismanual}}
                {{^istrackeduser}}
                    <div class="d-flex mt-2" role="listitem">
                        <div>{{#pix}}i/dot{{/pix}}</div>
                        <span>{{#str}} completion_manual:markdone, core_course {{/str}}</span>
                    </div>
                {{/istrackeduser}}
            {{/ismanual}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istrackeduser');
                $buffer .= $this->sectionEf68b041e87d0a6b210484a6a9e3d059($context, $indent, $value);
                $value = $context->find('istrackeduser');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <strong>';
                    $value = $context->find('str');
                    $buffer .= $this->section1bcd79789e022caa91886dd480a9edee($context, $indent, $value);
                    $buffer .= '</strong>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="ms-2" role="list">
';
                $value = $context->find('completiondetails');
                $buffer .= $this->section965ce740508a52052434a44b144cfbb1($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('ismanual');
                $buffer .= $this->section5b9816c747835009aac76863ac5e06fc($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15269ecdd6ea54db45fe8781b50e832(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emptyconditionsinfo, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'emptyconditionsinfo, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8f08b99bc16854a177f656d348461e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span>{{#str}}emptyconditionsinfo, completion{{/str}}</span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span>';
                $value = $context->find('str');
                $buffer .= $this->sectionB15269ecdd6ea54db45fe8781b50e832($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaff92a9981ce87d7a15605f23834b00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' req, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' req, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f1d4b5fa68ba560c45e5d474a320ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emptyconditionswarning, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'emptyconditionswarning, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2df8ce8fc647695ddff0b159fe46e327(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/edit, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/edit, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB13f0f7c546cf4960caba08a2657716e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editconditions, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editconditions, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c1bef5eb5b152fab24db3f7a5ffa01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}} i/edit, core {{/pix}}{{#str}}editconditions, completion{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section2df8ce8fc647695ddff0b159fe46e327($context, $indent, $value);
                $value = $context->find('str');
                $buffer .= $this->sectionB13f0f7c546cf4960caba08a2657716e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b089e00077ec061918a3e4dd2d05479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/add, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/add, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf10d8d6cb6ceefb393c1bf2a460635c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addconditions, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addconditions, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d7e12c9fa76d0967123b017c07a50d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="editcompletion bulk-hidden border-top mt-3 pt-3">
                <a href="{{editurl}}" class="btn btn-sm px-2 py-0">
                    {{#hasconditions}}{{#pix}} i/edit, core {{/pix}}{{#str}}editconditions, completion{{/str}}{{/hasconditions}}
                    {{^hasconditions}}{{#pix}} t/add, core {{/pix}}{{#str}}addconditions, completion{{/str}}{{/hasconditions}}
                </a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="editcompletion bulk-hidden border-top mt-3 pt-3">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-sm px-2 py-0">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('hasconditions');
                $buffer .= $this->sectionE6c1bef5eb5b152fab24db3f7a5ffa01($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('hasconditions');
                if (empty($value)) {
                    
                    $value = $context->find('pix');
                    $buffer .= $this->section9b089e00077ec061918a3e4dd2d05479($context, $indent, $value);
                    $value = $context->find('str');
                    $buffer .= $this->sectionEf10d8d6cb6ceefb393c1bf2a460635c($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f47775b0d614f0c3905486338158642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#editurl}}
            <div class="editcompletion bulk-hidden border-top mt-3 pt-3">
                <a href="{{editurl}}" class="btn btn-sm px-2 py-0">
                    {{#hasconditions}}{{#pix}} i/edit, core {{/pix}}{{#str}}editconditions, completion{{/str}}{{/hasconditions}}
                    {{^hasconditions}}{{#pix}} t/add, core {{/pix}}{{#str}}addconditions, completion{{/str}}{{/hasconditions}}
                </a>
            </div>
        {{/editurl}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('editurl');
                $buffer .= $this->section1d7e12c9fa76d0967123b017c07a50d7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
