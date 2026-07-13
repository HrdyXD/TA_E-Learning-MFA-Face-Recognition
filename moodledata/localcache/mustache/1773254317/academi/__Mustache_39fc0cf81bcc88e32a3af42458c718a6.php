<?php

class __Mustache_39fc0cf81bcc88e32a3af42458c718a6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('excerpt');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div';
            $value = $context->find('editing');
            $buffer .= $this->section65bc274ea141045357c41a5cb3015b38($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '        ';
            $value = $context->find('pix');
            $buffer .= $this->section0b7a74ef365e2e19e174c81d3ebda570($context, $indent, $value);
            $buffer .= ' ';
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $value = $context->find('excerpt');
        $buffer .= $this->sectionB4a570dd4fbfdac589fca2c717581ca7($context, $indent, $value);
        $value = $context->find('editing');
        $buffer .= $this->section756edf9ec7f2242d731a43f0e8463dde($context, $indent, $value);

        return $buffer;
    }

    private function section65bc274ea141045357c41a5cb3015b38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="mt-2"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' class="mt-2"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b7a74ef365e2e19e174c81d3ebda570(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/unlock, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/unlock, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section010a383147348c8bf9c27be8b5de3ef8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mt-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mt-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85852cd18017d71fa666d866225e4833(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mt-2 pb-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mt-2 pb-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4a570dd4fbfdac589fca2c717581ca7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< core/showmore }}
        {{$collapsedcontent}}
            {{#pix}}t/unlock, core{{/pix}} <span class="availability-excerpt"> {{{excerpt}}} ... </span>
        {{/collapsedcontent}}
        {{$expandedcontent}}
            {{#pix}}t/unlock, core{{/pix}} {{{text}}}
        {{/expandedcontent}}
        {{$buttonextraclasses}}font-weight-bold{{/buttonextraclasses}}
        {{$collapsedextraclasses}}text-truncate pe-2 {{#editing}}mt-2{{/editing}}{{/collapsedextraclasses}}
        {{$expandedextraclasses}}
            {{^editing}}py-2{{/editing}}
            {{#editing}}mt-2 pb-2{{/editing}}
        {{/expandedextraclasses}}
    {{/core/showmore }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/showmore')) {
                    $context->pushBlockContext(array(
                        'collapsedcontent' => array($this, 'block126cc8ab7530f72274813ca0f378d646'),
                        'expandedcontent' => array($this, 'block1e9b7e75fc84b89081d0aa691770b28f'),
                        'buttonextraclasses' => array($this, 'blockBf2a96dee308df02fe6886be666370f4'),
                        'collapsedextraclasses' => array($this, 'block254ad2aeb53ad1764a7272d254e53220'),
                        'expandedextraclasses' => array($this, 'block85358351994aaf198b9dae1e9f970ad0'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
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

    private function section9d80787a3058814977f5c17ebdc8efe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsettings, availability';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editsettings, availability';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5779cb59ab7c62501193848d97a2f9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="editavailability border-top mt-2 py-2">
            <a href="{{editurl}}" class="btn btn-sm py-0">{{#pix}} i/edit, core {{/pix}}{{#str}}editsettings, availability{{/str}}</a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="editavailability border-top mt-2 py-2">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-sm py-0">';
                $value = $context->find('pix');
                $buffer .= $this->section2df8ce8fc647695ddff0b159fe46e327($context, $indent, $value);
                $value = $context->find('str');
                $buffer .= $this->section9d80787a3058814977f5c17ebdc8efe8($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section756edf9ec7f2242d731a43f0e8463dde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#editurl}}
        <div class="editavailability border-top mt-2 py-2">
            <a href="{{editurl}}" class="btn btn-sm py-0">{{#pix}} i/edit, core {{/pix}}{{#str}}editsettings, availability{{/str}}</a>
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
                $buffer .= $this->sectionB5779cb59ab7c62501193848d97a2f9d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block126cc8ab7530f72274813ca0f378d646($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        $value = $context->find('pix');
        $buffer .= $this->section0b7a74ef365e2e19e174c81d3ebda570($context, $indent, $value);
        $buffer .= ' <span class="availability-excerpt"> ';
        $value = $this->resolveValue($context->find('excerpt'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' ... </span>
';
    
        return $buffer;
    }

    public function block1e9b7e75fc84b89081d0aa691770b28f($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section0b7a74ef365e2e19e174c81d3ebda570($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockBf2a96dee308df02fe6886be666370f4($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'font-weight-bold';
    
        return $buffer;
    }

    public function block254ad2aeb53ad1764a7272d254e53220($context)
    {
        $indent = $buffer = '';
        $buffer .= 'text-truncate pe-2 ';
        $value = $context->find('editing');
        $buffer .= $this->section010a383147348c8bf9c27be8b5de3ef8($context, $indent, $value);
    
        return $buffer;
    }

    public function block85358351994aaf198b9dae1e9f970ad0($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= 'py-2';
        }
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('editing');
        $buffer .= $this->section85852cd18017d71fa666d866225e4833($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }
}
