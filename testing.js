const express = require('express');
const { Builder, By, until, Key } = require("selenium-webdriver");

const app = express();
const port = 3000;
var myParser = require("body-parser");
app.use(myParser.urlencoded({extended : true}));
app.post('/api', async function(req, res, next) {
    try {
    //   res.json(await programmingLanguages.create(req.body));
        const data = await loginTest(req.body.nik);
        res.status(200).json(data);
    } catch (err) {
      console.error(`Error while creating programming language`, err.message);
      next(err);
    }
})
app.get('/', (req, res)=>
{
    res.send('This Server');
})
app.listen(port, () => {
 console.log(`Example app listening at http://localhost:${port}`);
});

const url = "https://cekdptonline.kpu.go.id";

async function loginTest(nik) {
  // launch the browser
  let driver = await new Builder().forBrowser("chrome").build();
  let json = [];    
  try {
    //navigate to facebook login page
    await driver.get(url);
    // Select input elements and fill them out
    await driver.findElement(By.id("__BVID__19")).sendKeys(nik);
    await driver.findElement(By.id("__BVID__19")).sendKeys(Key.RETURN);
    
    await driver.sleep(2 * 1000)
    
    const text = await driver.findElement(By.className('column')).getText();
    json.push({
        nama: text.split('\n')[1] ?? '',
        tps: text.split('\n')[3] ?? '',
        kabupaten: text.split('\n')[11] ?? '',
        kecamatan: text.split('\n')[13] ?? '',
        kelurahan: text.split('\n')[15] ?? '',
        alamat: text.split('\n')[17] ?? '',
      });

    return json;

  } finally {
    await driver.quit();
  }
}
