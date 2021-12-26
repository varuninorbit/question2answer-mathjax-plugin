<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    
    public function head_script()
	{	
        $this->content['script'][] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-MML-AM_CHTML"></script>';
        $this->content['script'][] = <<<Doc
        
        <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {
            inlineMath: [['$', '$']],
            processEscapes: true
        },
        CommonHTML: {
            scale: 200,
        linebreaks: {
             automatic: true
            }
          },
          "HTML-CSS": {
        scale: 200,
            linebreaks: {
              automatic: true
            }
          }
        })
</script>
Doc;
        
		
		parent::head_script();
	}

   
}
