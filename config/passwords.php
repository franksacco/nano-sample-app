<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

/*
 * Configuration for passwords hashing.
 */
return [
    /*
     * The password algorithm constant denoting the algorithm to use when
     * hashing the password.
     * Default: `PASSWORD_DEFAULT`.
     */
    'algorithm' => PASSWORD_DEFAULT,

    /*
     * The associative array containing options. See documentation for
     * information on the supported options for each algorithm. If omitted,
     * the default cost will be used.
     * Default: `[]`.
     */
    'options' => []
];