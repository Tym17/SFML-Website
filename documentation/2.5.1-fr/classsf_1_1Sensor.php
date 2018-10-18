<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Sensor Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Sensor.php">Sensor</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Sensor-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Sensor Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Give access to the real-time state of the sensors.  
 <a href="classsf_1_1Sensor.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Sensor_8hpp_source.php">Sensor.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a687375af3ab77b818fca73735bcaea84"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867">Accelerometer</a>, 
<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656">Gyroscope</a>, 
<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d">Magnetometer</a>, 
<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">Gravity</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215">UserAcceleration</a>, 
<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00">Orientation</a>, 
<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afcb4a80eb9e3f927c5837207a1b9eb29">Count</a>
<br />
 }</td></tr>
<tr class="memdesc:a687375af3ab77b818fca73735bcaea84"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">Sensor</a> type.  <a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">More...</a><br /></td></tr>
<tr class="separator:a687375af3ab77b818fca73735bcaea84"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a7b7a2570218221781233bd495323abf0"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Sensor.php#a7b7a2570218221781233bd495323abf0">isAvailable</a> (<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a> sensor)</td></tr>
<tr class="memdesc:a7b7a2570218221781233bd495323abf0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a sensor is available on the underlying platform.  <a href="#a7b7a2570218221781233bd495323abf0">More...</a><br /></td></tr>
<tr class="separator:a7b7a2570218221781233bd495323abf0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afb31c5697d2e0a5fec70d702ec1d6cd9"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Sensor.php#afb31c5697d2e0a5fec70d702ec1d6cd9">setEnabled</a> (<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a> sensor, bool enabled)</td></tr>
<tr class="memdesc:afb31c5697d2e0a5fec70d702ec1d6cd9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enable or disable a sensor.  <a href="#afb31c5697d2e0a5fec70d702ec1d6cd9">More...</a><br /></td></tr>
<tr class="separator:afb31c5697d2e0a5fec70d702ec1d6cd9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab9a2710f55ead2f7b4e1b0bead34457e"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Sensor.php#ab9a2710f55ead2f7b4e1b0bead34457e">getValue</a> (<a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a> sensor)</td></tr>
<tr class="memdesc:ab9a2710f55ead2f7b4e1b0bead34457e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current sensor value.  <a href="#ab9a2710f55ead2f7b4e1b0bead34457e">More...</a><br /></td></tr>
<tr class="separator:ab9a2710f55ead2f7b4e1b0bead34457e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Give access to the real-time state of the sensors. </p>
<p><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">sf::Sensor</a> provides an interface to the state of the various sensors that a device provides.</p>
<p>It only contains static functions, so it's not meant to be instantiated.</p>
<p>This class allows users to query the sensors values at any time and directly, without having to deal with a window and its events. Compared to the SensorChanged event, <a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">sf::Sensor</a> can retrieve the state of a sensor at any time (you don't need to store and update its current value on your side).</p>
<p>Depending on the OS and hardware of the device (phone, tablet, ...), some sensor types may not be available. You should always check the availability of a sensor before trying to read it, with the <a class="el" href="classsf_1_1Sensor.php#a7b7a2570218221781233bd495323abf0" title="Check if a sensor is available on the underlying platform. ">sf::Sensor::isAvailable</a> function.</p>
<p>You may wonder why some sensor types look so similar, for example Accelerometer and Gravity / UserAcceleration. The first one is the raw measurement of the acceleration, and takes into account both the earth gravity and the user movement. The others are more precise: they provide these components separately, which is usually more useful. In fact they are not direct sensors, they are computed internally based on the raw acceleration and other sensors. This is exactly the same for Gyroscope vs Orientation.</p>
<p>Because sensors consume a non-negligible amount of current, they are all disabled by default. You must call <a class="el" href="classsf_1_1Sensor.php#afb31c5697d2e0a5fec70d702ec1d6cd9" title="Enable or disable a sensor. ">sf::Sensor::setEnabled</a> for each sensor in which you are interested.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keywordflow">if</span> (<a class="code" href="classsf_1_1Sensor.php#a7b7a2570218221781233bd495323abf0">sf::Sensor::isAvailable</a>(<a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">sf::Sensor::Gravity</a>))</div><div class="line">{</div><div class="line">    <span class="comment">// gravity sensor is available</span></div><div class="line">}</div><div class="line"></div><div class="line"><span class="comment">// enable the gravity sensor</span></div><div class="line"><a class="code" href="classsf_1_1Sensor.php#afb31c5697d2e0a5fec70d702ec1d6cd9">sf::Sensor::setEnabled</a>(<a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">sf::Sensor::Gravity</a>, <span class="keyword">true</span>);</div><div class="line"></div><div class="line"><span class="comment">// get the current value of gravity</span></div><div class="line"><a class="code" href="classsf_1_1Vector3.php">sf::Vector3f</a> gravity = <a class="code" href="classsf_1_1Sensor.php#ab9a2710f55ead2f7b4e1b0bead34457e">sf::Sensor::getValue</a>(<a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">sf::Sensor::Gravity</a>);</div></div><!-- fragment --> 
<p class="definition">Definition at line <a class="el" href="Sensor_8hpp_source.php#l00042">42</a> of file <a class="el" href="Sensor_8hpp_source.php">Sensor.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a687375af3ab77b818fca73735bcaea84"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a687375af3ab77b818fca73735bcaea84">&#9670;&nbsp;</a></span>Type</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">sf::Sensor::Type</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">Sensor</a> type. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867"></a>Accelerometer&#160;</td><td class="fielddoc"><p>Measures the raw acceleration (m/s^2) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656"></a>Gyroscope&#160;</td><td class="fielddoc"><p>Measures the raw rotation rates (degrees/s) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d"></a>Magnetometer&#160;</td><td class="fielddoc"><p>Measures the ambient magnetic field (micro-teslas) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92"></a>Gravity&#160;</td><td class="fielddoc"><p>Measures the direction and intensity of gravity, independent of device acceleration (m/s^2) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215"></a>UserAcceleration&#160;</td><td class="fielddoc"><p>Measures the direction and intensity of device acceleration, independent of the gravity (m/s^2) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00"></a>Orientation&#160;</td><td class="fielddoc"><p>Measures the absolute 3D orientation (degrees) </p>
</td></tr>
<tr><td class="fieldname"><a id="a687375af3ab77b818fca73735bcaea84afcb4a80eb9e3f927c5837207a1b9eb29"></a>Count&#160;</td><td class="fielddoc"><p>Keep last &ndash; the total number of sensor types. </p>
</td></tr>
</table>

<p class="definition">Definition at line <a class="el" href="Sensor_8hpp_source.php#l00050">50</a> of file <a class="el" href="Sensor_8hpp_source.php">Sensor.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ab9a2710f55ead2f7b4e1b0bead34457e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab9a2710f55ead2f7b4e1b0bead34457e">&#9670;&nbsp;</a></span>getValue()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> sf::Sensor::getValue </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a>&#160;</td>
          <td class="paramname"><em>sensor</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current sensor value. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sensor</td><td><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">Sensor</a> to read</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The current sensor value </dd></dl>

</div>
</div>
<a id="a7b7a2570218221781233bd495323abf0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7b7a2570218221781233bd495323abf0">&#9670;&nbsp;</a></span>isAvailable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Sensor::isAvailable </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a>&#160;</td>
          <td class="paramname"><em>sensor</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if a sensor is available on the underlying platform. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sensor</td><td><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">Sensor</a> to check</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the sensor is available, false otherwise </dd></dl>

</div>
</div>
<a id="afb31c5697d2e0a5fec70d702ec1d6cd9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#afb31c5697d2e0a5fec70d702ec1d6cd9">&#9670;&nbsp;</a></span>setEnabled()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Sensor::setEnabled </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a>&#160;</td>
          <td class="paramname"><em>sensor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>enabled</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Enable or disable a sensor. </p>
<p>All sensors are disabled by default, to avoid consuming too much battery power. Once a sensor is enabled, it starts sending events of the corresponding type.</p>
<p>This function does nothing if the sensor is unavailable.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sensor</td><td><a class="el" href="classsf_1_1Sensor.php" title="Give access to the real-time state of the sensors. ">Sensor</a> to enable </td></tr>
    <tr><td class="paramname">enabled</td><td>True to enable, false to disable </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Sensor_8hpp_source.php">Sensor.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>