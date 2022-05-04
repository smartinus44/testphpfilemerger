<?php
/**
 * TestPhpfilemerger
 * PHP version 7.4.3
 * 
 * @category  PHP
 * @package   TestPhpfilemerger
 * @author    Sylvain MARTIN <sylvain.martin-44@laposte.net>
 * @copyright 2022 Sylvain MARTIN
 * @license   https://opensource.org/licenses/mit-license.php MIT
 * @version   GIT: <git_id>
 * @link      _
 */
require "vendor/autoload.php";

use PhpFileMerger\bin\Adapters\FileGetContentsAdapter;
use PhpFileMerger\bin\Program;
use PhpFileMerger\bin\Adapters\GlobAdapter;

(new Program(new FileGetContentsAdapter(), new GlobAdapter))->run();
