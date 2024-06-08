<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MakeModelCommand extends BaseCommand
{
    protected $group       = 'Make';
    protected $name        = 'make:model';
    protected $description = 'Create a new model';
    protected $usage       = 'make:model ModelName';

    public function run(array $params)
    {
        $name = array_shift($params);

        if (empty($name))
        {
            return CLI::error('You must provide the model name.');
        }

        $modelPath = APPPATH . 'Models/' . $name . '.php';

        if (file_exists($modelPath))
        {
            return CLI::error('Model already exists: ' . $name);
        }

        $template = "<?php\n\nnamespace App\Models;\n\nuse CodeIgniter\Model;\n\nclass $name extends Model\n{\n    protected \$table = '';\n    protected \$primaryKey = 'id';\n    protected \$allowedFields = [];\n}\n";

        if (! write_file($modelPath, $template))
        {
            return CLI::error('Unable to write model file: ' . $name);
        }

        return CLI::write('Model created: ' . $name, 'green');
    }
}
