<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * External xapi log store plugin
 *
 * @package    logstore_xapi
 * @copyright  2015 Jerrett Fowler <jfowler@charitylearning.org>
 *                  Ryan Smith <ryan.smith@ht2.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['endpoint'] = 'Endpoint';
$string['settings'] = 'Param�tres g�n�raux';
$string['xapifieldset'] = 'Exemple de champs personnalis�s';
$string['xapi'] = 'xAPI';
$string['password'] = 'Mot de passe';
$string['pluginadministration'] = 'Administration de Logstore xAPI';
$string['pluginname'] = 'Logstore xAPI';
$string['submit'] = 'Soumettre';
$string['username'] = 'Utilisateur';
$string['xapisettingstitle'] = 'Param�tres de Logstore xAPI';
$string['backgroundmode'] = 'Planifier l\'envoi des statements ?';
$string['backgroundmode_desc'] = 'Cela forcera Moodle � envoyer les d�clarations au LRS en arri�re-plan,
�������� via une t�che cron. Cela rendra le processus moins imm�diat, mais aidera � garantir la performance de Moodle ainsi que la performance du LRS.';
$string['maxbatchsize'] = 'Taille maximale du lot';
$string['maxbatchsize_desc'] = 'SLes statements sont envoy�es au LRS par lots. Ce param�tre contr�le le nombre maximum de
�������� statements � envoyer en une seule op�ration. Si vous param�trez cette valeur sur z�ro, tous les statements valables
�������� seront envoy�s en m�me temps, ceci n'\�tant pas recommand�.';
$string['taskemit'] = 'Emettre des enregistrements vers le LRS';
$string['routes'] = 'Inclure les actions suivantes';
$string['filters'] = 'Filtre les historiques';
$string['logguests'] = 'Consigner les actions de l'\invit�';
$string['filters_help'] = 'Activer les filtres permettant de consigner ces actions .';
$string['mbox'] = 'Envoyer le mail de l\'utilisateur';
$string['mbox_desc'] = 'Les statements identifieront l\'utilisateur avec son email (mbox) ou avec sin ID sur la platforme de moodle (account). Activer ce bouton enverra son email (mbox).';
