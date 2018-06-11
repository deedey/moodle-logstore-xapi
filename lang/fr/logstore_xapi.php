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
$string['settings'] = 'Paramètres généraux';
$string['xapifieldset'] = 'Exemple de champs personnalisés';
$string['xapi'] = 'xAPI';
$string['password'] = 'Mot de passe';
$string['pluginadministration'] = 'Administration de Logstore xAPI';
$string['pluginname'] = 'Logstore xAPI';
$string['submit'] = 'Soumettre';
$string['username'] = 'Utilisateur';
$string['xapisettingstitle'] = 'Paramètres de Logstore xAPI';
$string['backgroundmode'] = 'Planifier l\'envoi des statements ?';
$string['backgroundmode_desc'] = 'Cela forcera Moodle à envoyer les déclarations au LRS en arrière-plan,
         via une tâche cron. Cela rendra le processus moins immédiat, mais aidera à garantir la performance de Moodle ainsi que la performance du LRS.';
$string['maxbatchsize'] = 'Taille maximale du lot';
$string['maxbatchsize_desc'] = 'Les statements sont envoyées au LRS par lots. Ce paramètre contrôle le nombre maximum de
         statements à envoyer en une seule opération. Si vous paramétrez cette valeur sur zéro, tous les statements valables
         seront envoyés en même temps, ceci n\'étant pas recommandé.';
$string['taskemit'] = 'Emettre des enregistrements vers le LRS';
$string['routes'] = 'Inclure les actions suivantes';
$string['filters'] = 'Filtre les historiques';
$string['logguests'] = 'Consigner les actions de l\invité';
$string['filters_help'] = 'Activer les filtres permettant de consigner ces actions .';
$string['mbox'] = 'Envoyer le mail de l\'utilisateur';
$string['mbox_desc'] = 'Les statements identifieront l\'utilisateur avec son email (mbox) ou avec son ID sur la platforme de moodle (account). Activer ce bouton enverra son email (mbox).';
