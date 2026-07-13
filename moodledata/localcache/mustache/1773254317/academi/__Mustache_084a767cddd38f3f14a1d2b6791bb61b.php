<?php

class __Mustache_084a767cddd38f3f14a1d2b6791bb61b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->section6a11938e034a417a539cc9c2352cdf4b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-popover footer-dark text-light">
';
            $buffer .= $indent . '        <div id="footer" ';
            $value = $context->find('footerbgimgclass');
            $buffer .= $this->sectionAd35e9a3cbf48574b19da6c4e65afc4e($context, $indent, $value);
            $buffer .= '>
';
            $value = $context->find('footerstatus');
            $buffer .= $this->section3170e66fb32ca6dff75543efe9dddc82($context, $indent, $value);
            $value = $context->find('footerbottomstatus');
            $buffer .= $this->sectionD64b39982f187e09d0ce0f23d53bc565($context, $indent, $value);
            $buffer .= $indent . '            <div data-region="footer-container-popover">
';
            $value = $context->findDot('output.has_communication_links');
            $buffer .= $this->sectionCfbf632d83c2ea705a91664109432820($context, $indent, $value);
            $buffer .= $indent . '                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('pix');
            $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </button>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="footer-content-popover container" data-region="footer-content-popover">
';
            $value = $context->findDot('output.has_communication_links');
            $buffer .= $this->section71d63d3ae668eee2b83bef6322c321c8($context, $indent, $value);
            $value = $context->findDot('output.has_popover_links');
            $buffer .= $this->section7defa3a4220ced89a3c820abc15eb078($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
            $buffer .= $indent . '                    <div class="logininfo">
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('output.login_info'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer">
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3">
';
            $buffer .= $indent . '                    <div>';
            $value = $context->find('str');
            $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
            $buffer .= '</div>
';
            $value = $context->findDot('output.moodle_release');
            $buffer .= $this->sectionC59057bb55e354663455059cc1cf0e30($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('backtotopbtn');
        $buffer .= $this->section4ba8a23779c7ef66bb1f2632de6f1677($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD6941b231183d81625a3128b7ad2db7b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionE4e3d7194748c8ea9ce8570bdc7cf237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{{copyrightfooter}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('copyrightfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a11938e034a417a539cc9c2352cdf4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark text-light">
        <div id="footer">
            <div class="footer-bottom">
                {{# copyrightfooter}}
                    <p>{{{copyrightfooter}}}</p>
                {{/ copyrightfooter}}
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $value = $context->find('copyrightfooter');
                $buffer .= $this->sectionE4e3d7194748c8ea9ce8570bdc7cf237($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd35e9a3cbf48574b19da6c4e65afc4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="{{footerbgimgclass}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' class="';
                $value = $this->resolveValue($context->find('footerbgimgclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06c9bf0993d8f2855163a54dd0aa5a72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle1}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section829112e924830c8f4c74f12203a92a63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <div class="footer-logo">
';
                $buffer .= $indent . '                                                        <a href="#"><img src="';
                $value = $this->resolveValue($context->find('footerlogourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e553ab8f36dcde4477ddf09462a7996(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('footerlogourl');
                $buffer .= $this->section829112e924830c8f4c74f12203a92a63($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c8dfe3b955e4f13f30ef53c994a3aa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{{footnote}}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8586cf2f022de03750212ed112b24b34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="infoarea">
                                            {{#ftitle1}}
                                                <h2>{{ftitle1}}</h2>
                                            {{/ftitle1}}
                                            {{#footlogostatus}}
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            {{/footlogostatus}}
                                            {{#footnote}}
                                                {{{footnote}}}
                                            {{/footnote}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="infoarea">
';
                $value = $context->find('ftitle1');
                $buffer .= $this->section06c9bf0993d8f2855163a54dd0aa5a72($context, $indent, $value);
                $value = $context->find('footlogostatus');
                $buffer .= $this->section6e553ab8f36dcde4477ddf09462a7996($context, $indent, $value);
                $value = $context->find('footnote');
                $buffer .= $this->section4c8dfe3b955e4f13f30ef53c994a3aa7($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC34808be890a7d444568ac20bef02974(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle2}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle2'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bf36b1e4d2b27f0fdfe078dd470bfe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <ul>
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8ed266440ae1500eceb0432f72907cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}} footer-links-block">
                                        <div class="foot-links">
                                            {{#ftitle2}}
                                                <h2>{{ftitle2}}</h2>
                                            {{/ftitle2}}
                                            {{# infolink}}
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            {{/ infolink}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' footer-links-block">
';
                $buffer .= $indent . '                                        <div class="foot-links">
';
                $value = $context->find('ftitle2');
                $buffer .= $this->sectionC34808be890a7d444568ac20bef02974($context, $indent, $value);
                $value = $context->find('infolink');
                $buffer .= $this->section6bf36b1e4d2b27f0fdfe078dd470bfe4($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe33a129e061ca57d946f09c00f570c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle3}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle3'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27a8824db035206bc3fd28070af93bad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p>{{address}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ace83524434f9855c1f2766927c4557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf32f46314ecae10aaf09f0b0cd6f918(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30a3d91555179aa5c94f57010e5cc516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="contact-info">
                                            {{#ftitle3}}
                                                <h2>{{ftitle3}}</h2>
                                            {{/ftitle3}}
                                            {{# address}}
                                                <p>{{address}}</p>
                                            {{/ address}}
                                            {{# phoneno}}
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            {{/ phoneno}}
                                            {{# emailid}}
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            {{/ emailid}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="contact-info">
';
                $value = $context->find('ftitle3');
                $buffer .= $this->sectionFe33a129e061ca57d946f09c00f570c7($context, $indent, $value);
                $value = $context->find('address');
                $buffer .= $this->section27a8824db035206bc3fd28070af93bad($context, $indent, $value);
                $value = $context->find('phoneno');
                $buffer .= $this->section9ace83524434f9855c1f2766927c4557($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionAf32f46314ecae10aaf09f0b0cd6f918($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92cde1375ff56dfad9daf4512785c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle4}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle4'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4c613d80a6cc6d577572e31e5fdbdfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                        <li class="smedia-';
                $value = $this->resolveValue($context->find('sno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <a href="';
                $value = $this->resolveValue($context->find('surl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" style="background-color: ';
                $value = $this->resolveValue($context->find('siconcolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('sicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                                </span>
';
                $buffer .= $indent . '                                                            </a>
';
                $buffer .= $indent . '                                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc70620f5fd8323004ceab03e964dba8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('sicon');
                $buffer .= $this->sectionF4c613d80a6cc6d577572e31e5fdbdfa($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60e357494102a4876b7e33362b3ff37a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('socialstatus');
                $buffer .= $this->sectionCc70620f5fd8323004ceab03e964dba8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe53669f9e4b9f0f09e0dd6d91c0b187(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="social-media">
                                            {{#ftitle4}}
                                                <h2>{{ftitle4}}</h2>
                                            {{/ftitle4}}
                                            <ul>
                                            {{#socialmedia}}
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            {{/socialmedia}}
                                            </ul>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="social-media">
';
                $value = $context->find('ftitle4');
                $buffer .= $this->section8f92cde1375ff56dfad9daf4512785c4($context, $indent, $value);
                $buffer .= $indent . '                                            <ul>
';
                $value = $context->find('socialmedia');
                $buffer .= $this->section60e357494102a4876b7e33362b3ff37a($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
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

    private function section3170e66fb32ca6dff75543efe9dddc82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-main">
                    <div class="container-fluid">
                        <div id="course-footer">
                            {{{ output.course_footer }}}
                        </div>
                        <div class="row">
                            {{! Footer block 1 start }}
                                {{#fstatus1}}
                                    <div class="{{colclass}}">
                                        <div class="infoarea">
                                            {{#ftitle1}}
                                                <h2>{{ftitle1}}</h2>
                                            {{/ftitle1}}
                                            {{#footlogostatus}}
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            {{/footlogostatus}}
                                            {{#footnote}}
                                                {{{footnote}}}
                                            {{/footnote}}
                                        </div>
                                    </div>
                                {{/fstatus1}}
                            {{! Footer block 1 end }}

                            {{! Footer block 2 start }}
                                {{#fstatus2}}
                                    <div class="{{colclass}} footer-links-block">
                                        <div class="foot-links">
                                            {{#ftitle2}}
                                                <h2>{{ftitle2}}</h2>
                                            {{/ftitle2}}
                                            {{# infolink}}
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            {{/ infolink}}
                                        </div>
                                    </div>
                                {{/fstatus2}}
                            {{! Footer block 2 end }}

                            {{! Footer block 3 start }}
                                {{#fstatus3}}
                                    <div class="{{colclass}}">
                                        <div class="contact-info">
                                            {{#ftitle3}}
                                                <h2>{{ftitle3}}</h2>
                                            {{/ftitle3}}
                                            {{# address}}
                                                <p>{{address}}</p>
                                            {{/ address}}
                                            {{# phoneno}}
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            {{/ phoneno}}
                                            {{# emailid}}
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            {{/ emailid}}
                                        </div>
                                    </div>
                                {{/fstatus3}}
                            {{! Footer block 3 end }}

                            {{! Footer block 4 start }}
                                {{#fstatus4}}
                                    <div class="{{colclass}}">
                                        <div class="social-media">
                                            {{#ftitle4}}
                                                <h2>{{ftitle4}}</h2>
                                            {{/ftitle4}}
                                            <ul>
                                            {{#socialmedia}}
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            {{/socialmedia}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/fstatus4}}
                            {{! Footer block 4 end }}
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
                
                $buffer .= $indent . '                <div class="footer-main">
';
                $buffer .= $indent . '                    <div class="container-fluid">
';
                $buffer .= $indent . '                        <div id="course-footer">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="row">
';
                $value = $context->find('fstatus1');
                $buffer .= $this->section8586cf2f022de03750212ed112b24b34($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus2');
                $buffer .= $this->sectionA8ed266440ae1500eceb0432f72907cd($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus3');
                $buffer .= $this->section30a3d91555179aa5c94f57010e5cc516($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus4');
                $buffer .= $this->sectionDe53669f9e4b9f0f09e0dd6d91c0b187($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3418af2aefdd68fcd25ab2d21993ce4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <p>{{{copyrightfooter}}}</p>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('copyrightfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD64b39982f187e09d0ce0f23d53bc565(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-bottom">
                    {{# copyrightfooter}}
                        <p>{{{copyrightfooter}}}</p>
                    {{/ copyrightfooter}}
                    {{! Moodle footer debug footer }}
                    <div class="footer-content-debugging">
                        <div class="container">{{{ output.debug_footer_html }}}</div>
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-bottom">
';
                $value = $context->find('copyrightfooter');
                $buffer .= $this->section3418af2aefdd68fcd25ab2d21993ce4c($context, $indent, $value);
                $buffer .= $indent . '                    <div class="footer-content-debugging">
';
                $buffer .= $indent . '                        <div class="container">';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c32b600d68c4d5f6fb463bea0a43a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'communicationroomlink, course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'communicationroomlink, course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section860fe5efd27e2c99776d92b09bfc4939(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/messages-o, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/messages-o, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfbf632d83c2ea705a91664109432820(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button onclick="window.open(\'{{output.communication_url}}\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="{{#str}}communicationroomlink, course{{/str}}">
                        {{#pix}}t/messages-o, core{{/pix}}
                    </button>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button onclick="window.open(\'';
                $value = $this->resolveValue($context->findDot('output.communication_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section01c32b600d68c4d5f6fb463bea0a43a3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section860fe5efd27e2c99776d92b09bfc4939($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71d63d3ae668eee2b83bef6322c321c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-section p-3 border-bottom footer-link-communication">
                        <div class="footer-support-link">{{{ output.communication_link }}}</div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-section p-3 border-bottom footer-link-communication">
';
                $buffer .= $indent . '                        <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.communication_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe284bc0c9d6cddc8c82f7f2b101dbe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.page_doc_link }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD61e1bb6dcf8db0a4be3e2fef1307557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.services_support_link }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1906ed22455279b5bd6c2f1a7a242de1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.supportemail }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7defa3a4220ced89a3c820abc15eb078(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-section p-3 border-bottom">
                        {{# output.page_doc_link }}
                            <div>{{{ output.page_doc_link }}}</div>
                        {{/ output.page_doc_link }}

                        {{# output.services_support_link }}
                            <div>{{{ output.services_support_link }}}</div>
                        {{/ output.services_support_link }}

                        {{# output.supportemail }}
                            <div>{{{ output.supportemail }}}</div>
                        {{/ output.supportemail }}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionDe284bc0c9d6cddc8c82f7f2b101dbe5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionD61e1bb6dcf8db0a4be3e2fef1307557($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section1906ed22455279b5bd6c2f1a7a242de1($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC59057bb55e354663455059cc1cf0e30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{#str}}version, core{{/str}}{{{ output.moodle_release }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ba8a23779c7ef66bb1f2632de6f1677(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6941b231183d81625a3128b7ad2db7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
