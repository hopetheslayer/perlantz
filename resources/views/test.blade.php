<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | PerlantzWebNew</title>
    <script src="/frontend/test/Build/UnityLoader.js"></script>
    <script>
        UnityLoader.instantiate("unityContainer", "/frontend/test/Build/filetest.json");
    </script>
</head>
<body>
<div id="unityContainer" style="width: 1920px; height: 800px; margin: auto"></div>

<script>
    window.onbeforeunload = function() {
        localStorage.removeItem('url');
        return '';
    };
    localStorage.setItem('url', 'http://denemeper.com/frontend/test/m20.fbx')
</script>
</body>
</html>
