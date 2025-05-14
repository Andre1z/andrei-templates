<?php
class MotorPlantillas {
    protected $templateDir;
    protected $variables = [];

    /**
     * Constructor
     * @param string|null $templateDir El directorio donde se encuentran las plantillas. Si no se indica, se asume que están en "../templates/"
     */
    public function __construct($templateDir = null) {
        if ($templateDir === null) {
            $this->templateDir = __DIR__ . '/../templates/';
        } else {
            $this->templateDir = $templateDir;
        }
    }

    /**
     * Asigna una variable que estará disponible en la plantilla.
     * @param string $name  Nombre de la variable.
     * @param mixed  $value Valor de la variable.
     */
    public function asignar($name, $value) {
        $this->variables[$name] = $value;
    }

    /**
     * Renderiza la plantilla especificada.
     * @param string  $template  Nombre del archivo de plantilla (por ejemplo, "blog-list.php").
     * @param bool    $retornar  Si es true retorna el contenido; en caso contrario, lo imprime directamente.
     * @return string|null Contenido generado si $retornar es true; de lo contrario, null.
     * @throws Exception Si la plantilla no existe.
     */
    public function renderizar($template, $retornar = false) {
        $rutaTemplate = $this->templateDir . $template;
        if (!file_exists($rutaTemplate)) {
            throw new Exception("La plantilla {$template} no existe en {$this->templateDir}");
        }
        
        // Extrae las variables asignadas para que sean visibles en la plantilla.
        extract($this->variables);
        
        // Inicia un buffer de salida para capturar el HTML generado.
        ob_start();
        include($rutaTemplate);
        $contenido = ob_get_clean();
        
        if ($retornar) {
            return $contenido;
        } else {
            echo $contenido;
        }
    }
}