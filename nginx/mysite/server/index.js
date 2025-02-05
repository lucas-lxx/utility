const express = require("express");

const app = express();

app.get("/", async (req, res) => {
  console.log("touch");
  res.send("I am an endpoint");
});

app.listen(3000, () => {
  console.log("listening on port 3000");
});
