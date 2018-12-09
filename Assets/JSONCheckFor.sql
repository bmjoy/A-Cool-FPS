in _GitHub, _Git, _JSON;
GO @include, INCLUDE;

CREATE TABLE TREE(
  JSON.TreeStructure;
);
GO @SERVER;

DECLARE This.ServerCheck(SET Server);
DECLARE This.AbstractCheck(SET Abstract);
DECLARE This.DeltaCheck(SET abs "DELTA", Delta);

CREATE VIEW Files (
  JSON.TreeStructure,
  SET FILES;
)

GO @FILES;

GO @GET; 
