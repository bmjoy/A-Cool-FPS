<?php

include filesystem;
include json;
include git;
include github;
include "JSONWorker.js";

new var j = jsonReader("JSONWorker.js");
filesystem.scan("JSONWorker.js");

public abstract class ServerPuller { Git.Server.ServerPullAction(GitHub.Server.abstractActions.deltaPullAction); }

public class ServerWorker extends ServerPuller implements Git.Server.*, GitHub.server.* {

  Git.Server.getActionFor(j), GitHub.Server.getActionForDelta;
  return Git.Server.deltaChecks.AbstractCheckPath(GitHub.path) ^&& AbstractCheckContents(GitHub.contents) ^&& AbstractCheckExtension(GitHub.extension);
}

return new ServerCheck = class.ServerWork;

?> 
