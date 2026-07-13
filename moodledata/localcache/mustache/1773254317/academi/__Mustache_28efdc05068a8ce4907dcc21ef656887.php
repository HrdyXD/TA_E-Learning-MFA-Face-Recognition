<?php

class __Mustache_28efdc05068a8ce4907dcc21ef656887 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('divider');
        if (empty($value)) {
            
            $value = $context->find('haschildren');
            $buffer .= $this->section003a93b82faad649d7aab3b04757d470($context, $indent, $value);
            $value = $context->find('haschildren');
            if (empty($value)) {
                
                $buffer .= $indent . '<a class="nav-item nav-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('title');
                $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
            }
        }

        return $buffer;
    }

    private function section4b8b1d056248164fd07f210141302f45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{{title}}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section949acfab51c23a4bc28d7c31c3422002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dropdown-divider"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="dropdown-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97a96bd5ac4a61b3e7a4b268a0480dda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^divider}}
                <a class="dropdown-item" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{text}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider"></div>
            {{/divider}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a class="dropdown-item" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" ';
                    $value = $context->find('title');
                    $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a>
';
                }
                $value = $context->find('divider');
                $buffer .= $this->section949acfab51c23a4bc28d7c31c3422002($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section003a93b82faad649d7aab3b04757d470(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span class="dropdown nav-item ps">
    <a class="dropdown-toggle nav-link" id="drop-down-{{uniqid}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
        {{text}}
    </a>
    <div class="dropdown-menu ps" aria-labelledby="drop-down-{{uniqid}}">
        {{#children}}
            {{^divider}}
                <a class="dropdown-item" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{text}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider"></div>
            {{/divider}}
        {{/children}}
    </div>
</span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<span class="dropdown nav-item ps">
';
                $buffer .= $indent . '    <a class="dropdown-toggle nav-link" id="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div class="dropdown-menu ps" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('children');
                $buffer .= $this->section97a96bd5ac4a61b3e7a4b268a0480dda($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
