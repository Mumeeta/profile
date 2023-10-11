<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/myprofile/templates/page.html.twig */
class __TwigTemplate_f44367add4c8e13fdf6de2accc761f8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo " <header>
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "

    <body>
        <aside>
            <nav>
                <img src=\"ms.jpg\" alt=\"\" style=\"width: 80%;\">
                <a href=\"#home\"><i class=\"material-icons md 36\">home</i><p>Home</p></a>
                <a href=\"#about\"><i class=\"material-icons md-36\">person</i><p>About</p></a>
                <a href=\"#skills\"><i class=\"material-icons md-36\">image</i><p>skills</p></a>
                <a href=\"#contact\"><i class=\"material-icons md-36\">mail</i><p>Contact</p></a>
            </nav>
        </aside>
        <nav class=\"mobile-nav\">
            <a href=\"#home\">Home</a>
            <a href=\"#about\">About</a>
            <a href=\"#skills\">Skills</a>
            <a href=\"#contact\">Contact</a>
         </nav> 
        <main>
            <header class=\"home\" id=\"home\"><br><br>
            <h1> Mumeeta Rughani</h1>
            <h5> junior Designer //Front end Developer</h5>
            <img src=\"ms.jpg\" alt=\"\">
            </header>
        </main>
        <section class=\"about\" id=\"about\">
            <h2>About me</h2>
            <p>
                <span>Hello,  I'm Mumeeta Rughani</span> I'm junior Designer and Front end Developer,passionate about learning new technologies
                to accomplish my knowledge and looking forward for new opportunities.A bit about me, I love art paininting and design, and music and shopping.
            </p>
            <p>
             I believe in user centered desgin aand delvering the best possible exerinence to people.I have experince with Html,Css,JavaScrpt,Wordpress, Reactjs, Drupal, and Bootstrap, jquery, Git,Git hub,Adobe Xd,Photoshop, Canva as well .
            Ihave certificate  Microsoft office program.
            </p>
        
        
            <h3>Programming</h3>
            <p>Reactjs</p>
                    <div class=\"container\">
                        <div class=\"skill\">88%</div>
                    </div>
            
                <p>Wordpress</p>
                    <div class=\"container\">
                        <div class=\"skill\">95%</div>
                    </div>
            
                <p>Adobe Xd</p>
                        <div class=\"container\">
                            <div class=\"skill\">90%</div>
                        </div>
            
                <p>Canva</p>
                        <div class=\"container\">
                            <div class=\"skill\">100%</div>
                        </div>
            
                <p>Html 5</p>
                        <div class=\"container\">
                            <div class=\"skill\">90%</div>
                        </div>
            
                <p>css</p>
                        <div class=\"container\">
                            <div class=\"skill\">88%</div>
                        </div>
            
                <p>javascript</p>
                        <div class=\"container\">
                            <div class=\"skill\">88%</div>
                        </div>
            
                <p>Bootsrap</p>                        
                        <div class=\"container\">
                            <div class=\"skill\">80%</div>
                        </div>
            
                <p>Jquery</p>
                        <div class=\"container\">
                        <div class=\"skill\">60%</div>
                        </div>
        </section>
        <section class=\"skills\" id=\"skills\">
             <h2>Experience</h2>
             <div class=\"row-halves\">
                <div class=\"col\">
                    <img src=\"ms.jpg\" alt=\"\">
                    <h3> Training</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc pretium, consequat ex eu, iaculis libero. Vivamus a mi in metus cursus bibendum. Praesent interdum viverra lorem vel mattis. Vestibulum sit amet nunc vitae odio tempor pretium</p>
                </div>
                  
            <div class=\"col\">
             <img src=\"ms.jpg\" alt=\"\">
                <h3>Mobile</h3>
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc pretium, consequat ex eu, iaculis libero. Vivamus a mi in metus cursus bibendum. Praesent interdum viverra lorem vel mattis. Vestibulum sit amet nunc vitae odio tempor pretium.</p>
            </div>
            </div>
             <div class=\"row-halves\">
                <div class=\"col\">
                    <img src=\"ms.jpg\" alt=\"\">
                    <h3> Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc pretium, consequat ex eu, iaculis libero. Vivamus a mi in metus cursus bibendum. Praesent interdum viverra lorem vel mattis. Vestibulum sit amet nunc vitae odio tempor pretium</p>
             </div>
                 

            <div class=\"col\">
             <img src=\"ms.jpg\" alt=\"\">
                <h3>Personal</h3>
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc pretium, consequat ex eu, iaculis libero. Vivamus a mi in metus cursus bibendum. Praesent interdum viverra lorem vel mattis. Vestibulum sit amet nunc vitae odio tempor pretium
                </p>
            </div>
             </div>
             
            </section>
        <section class=\"contact\" id=\"contact\">
            <h2> Contact</h2>
            <div class=\"container\">
                <from action=\"\">
                    <label for=\"user_name\">Name</label>
                    <input type=\"text\" id=\"user_name\" name=\"user_name\">
                    <label for=\"email\">E-mail</label>
                    <input type=\"text\" id=\"email\" name=\"email\">
                    <label for=\"message\">Message</label>
                    <textarea name=\"message\" id=\"message\" style=\"height:200px;\"></textarea>
                    <input type=\"sumbit\" value=\"Send\">
                </from>
            </div>
         </section>
        <footer>
            <section class=\"top-bar\">
                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"\"><i class=\"fab fa-github\"></i></a>
            </section>  
            
            <section class =\"bottom-bar\">
              <p>\"Experience is simply the name we give our mistakes.\"</p>


                <p>&copy 2023|All right reserved</p>
            </section>
        </footer>
  </body>      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/myprofile/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 55,  39 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/myprofile/templates/page.html.twig", "/var/www/html/web/themes/custom/myprofile/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
