<?php namespace logstore_emitter\xapi\recipes;
use \TinCan\Verb as tincan_verb;
use \logstore_emitter\xapi\agent as xapi_agent;
use \logstore_emitter\xapi\activity as xapi_activity;

class user_loggedin extends base {
    /**
     * Constructs a new statement for user_loggedin.
     * @param [String => Mixed] $opts Options to construct the statement with.
     * @override base
     */
    public function __construct(array $opts) {
        parent::__construct([
            'actor' => new xapi_agent($opts['user']),
            'verb' => new tincan_verb([
                'id' => 'https://brindlewaye.com/xAPITerms/verbs/loggedin/',
                'display' => [
                    'en-GB' => 'logged in',
                    'en-US' => 'logged in',
                ]
            ]),
            'object' => new xapi_activity($opts['object'])
        ]);
    }
}