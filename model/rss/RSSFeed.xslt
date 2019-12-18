<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title></title>
      </head>
      <body>
        <table cellpadding="2" cellspacing="0" border="0" width="75%">
            <xsl:for-each select="rss/channel/item">
                  <tr style="color:#0080FF;">
                    <td style="text-align:left;font-weight:bold;">
                      <xsl:value-of select ="title"></xsl:value-of>
                    </td>
                    <td style="text-align:right;font-weight:bold;">
                      <i><xsl:value-of select ="author"></xsl:value-of>
                      </i>, <xsl:value-of select="pubDate"/>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align:left;padding-top:10px;">
                      <xsl:value-of select="description"/>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align:right;">
                      <a href="{link}" rel="bookmark">
                        More...
                      </a>
                    </td>
                  </tr>
              <tr>
                <td colspan="2" style="height:20px;">
                  <hr></hr>
                </td>
              </tr>

            </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>