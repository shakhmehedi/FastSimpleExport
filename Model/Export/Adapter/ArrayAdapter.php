<?php
namespace FireGento\FastSimpleExport2\Model\Export\Adapter;
use Magento\ImportExport\Model\Export\Adapter\AbstractAdapter;
use Magento\Framework\Filesystem;
use Magento\Framework\App\Filesystem\DirectoryList;

class ArrayAdapter extends \Magento\ImportExport\Model\Export\Adapter\AbstractAdapter{

    /**
     * @var int
     */
    protected $length = 0;

    public function __construct(
        \Magento\Framework\Filesystem $filesystem,
        $destination = null,
        $destinationDirectoryCode = DirectoryList::VAR_DIR
    ) {
        parent::__construct($filesystem," ",$destinationDirectoryCode);
    }
    public function writeRow(array $rowData)
    {
        $this->length++;
    }
    public function getContents()
    {
        return str_repeat("a\n",$this->length+1);
    }
}