<?php

/**
 * IDE stub: PhpSpreadsheet types for Intelephense/IDE when vendor/ is not installed.
 * This file is never loaded at runtime; Docker and production use composer vendor.
 *
 * @see https://github.com/PHPOffice/PhpSpreadsheet
 */

namespace PhpOffice\PhpSpreadsheet {

    class Spreadsheet
    {
        public function getActiveSheet(): \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet
        {
            return new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet();
        }
    }
}

namespace PhpOffice\PhpSpreadsheet\Worksheet {

    class Worksheet
    {
        public function setTitle(string $title): void
        {
        }

        public function setCellValue($coordinate, $value): void
        {
        }

        public function getStyle($cellRange): \PhpOffice\PhpSpreadsheet\Style\Style
        {
            return new \PhpOffice\PhpSpreadsheet\Style\Style();
        }

        public function getColumnDimension($column): \PhpOffice\PhpSpreadsheet\Worksheet\ColumnDimension
        {
            return new \PhpOffice\PhpSpreadsheet\Worksheet\ColumnDimension();
        }
    }

    class ColumnDimension
    {
        public function setAutoSize(bool $autoSize): self
        {
            return $this;
        }
    }
}

namespace PhpOffice\PhpSpreadsheet\Style {

    class Style
    {
        public function getFont(): \PhpOffice\PhpSpreadsheet\Style\Font
        {
            return new \PhpOffice\PhpSpreadsheet\Style\Font();
        }
    }

    class Font
    {
        public function setBold(bool $bold): self
        {
            return $this;
        }
    }
}

namespace PhpOffice\PhpSpreadsheet\Writer {

    class Xlsx
    {
        public function __construct(\PhpOffice\PhpSpreadsheet\Spreadsheet $spreadsheet)
        {
        }

        public function save(string $filename): void
        {
        }
    }
}
