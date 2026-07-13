<?php

class __Mustache_3b67f7a048602a4dfd4cc6b2c9be4ff8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('status');
        $buffer .= $this->sectionCc18f629990958dabfc9430c8789afb3($context, $indent, $value);

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

    private function sectionAff748cd155b191339bf6679f7811d38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
';
                $buffer .= $indent . '                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC81755607da93a558b1138ebf29c0c76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <img src="';
                $value = $this->resolveValue($context->find('slideimg'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="slide-image">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE966ae7d3cf15c14cb0e9f43d96178d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h1 data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa63163a5f1797e9919518ac8e52719c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('desc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02f509e5223031bb75dabb9b490e4be4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('btnlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('btntarget'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=\'btn btn-primary ';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('btntxt'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB203aceb0c7a91f81b1942cf1752db48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
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
                
                $buffer .= $indent . '                                    <div class="slide-text content_overlayer ';
                $value = $this->resolveValue($context->find('contentClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="width:';
                $value = $this->resolveValue($context->find('contentwidth'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                                        <div class="heading-content">
';
                $value = $context->find('caption');
                $buffer .= $this->sectionE966ae7d3cf15c14cb0e9f43d96178d1($context, $indent, $value);
                $buffer .= $indent . '                                            <br>
';
                $value = $context->find('desc');
                $buffer .= $this->sectionAa63163a5f1797e9919518ac8e52719c($context, $indent, $value);
                $buffer .= $indent . '                                            <div class="link-button">
';
                $value = $context->find('btntxt');
                $buffer .= $this->section02f509e5223031bb75dabb9b490e4be4($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55d659424b572e1583c20338a299950e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="homecarousel-slide-item carousel-item">
';
                $buffer .= $indent . '                                <div class="slide-item slide-content ';
                $value = $this->resolveValue($context->find('overlayClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="slide-main-background">
';
                $value = $context->find('slideimg');
                $buffer .= $this->sectionC81755607da93a558b1138ebf29c0c76($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $value = $context->find('slidecontentstatus');
                $buffer .= $this->sectionB203aceb0c7a91f81b1942cf1752db48($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31b467c14d811193f5aa312a77cfe31b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slideimg');
                $buffer .= $this->section55d659424b572e1583c20338a299950e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe94c1a473b65aadd4c6cb7672d62b32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slidestatus');
                $buffer .= $this->section31b467c14d811193f5aa312a77cfe31b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22327406659b94a52e8eb4458dea66a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="homepage-carousel">
            {{#numofslide}}
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            {{/numofslide}}
            <div id="homepage-carousel">
                {{#slides}}
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                {{/slides}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="homepage-carousel">
';
                $value = $context->find('numofslide');
                $buffer .= $this->sectionAff748cd155b191339bf6679f7811d38($context, $indent, $value);
                $buffer .= $indent . '            <div id="homepage-carousel">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionEe94c1a473b65aadd4c6cb7672d62b32($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc18f629990958dabfc9430c8789afb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}


    {{#sliderblockstatus}}
        <div class="homepage-carousel">
            {{#numofslide}}
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            {{/numofslide}}
            <div id="homepage-carousel">
                {{#slides}}
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                {{/slides}}
            </div>
        </div>
    {{/sliderblockstatus}}
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
                $buffer .= $indent . '
';
                $value = $context->find('sliderblockstatus');
                $buffer .= $this->section22327406659b94a52e8eb4458dea66a1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
