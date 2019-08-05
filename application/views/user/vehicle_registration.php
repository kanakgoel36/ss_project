<div class="container" id="myDIV3" style="display:none">
<h1 style="text-align:center">VEHICLE REGISTRATION FORM</h1>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputVehicleNo">Vehicle Number</label>
              <input type="text" class="form-control" id="inputVehicleNO">
            </div>
            <div class="form-group col-md-6">
              <label for="inputBrand">Vehicle Brand</label>
              <select id="inputBrand" class="form-control">
                <option selected>TATA</option>
                <option>TOYOTA</option>
                <option>MAHINDRA</option>
                <option>MARUTI</option>
              </select>
            </div>
          </div>
          <div class="form-row">
                
            <div class="form-group col-md-4">
                    <label for="inputDimensions">Lenth</label>          
              <input type="text" class="form-control" id="inputDimensions" placeholder=" in metres">
            </div>
            <div class="form-group col-md-4">            
                    <label for="inputDimensions">Width</label>
                    <input type="text" class="form-control" id="inputDimensions" placeholder=" in metres">
                  </div>
                  <div class="form-group col-md-4">
                        <label for="inputDimensions">Depth </label>
                  <input type="text" class="form-control" id="inputDimensions" placeholder=" in metres">
                </div>
            <div class="form-group col-md-5">
              <label for="inputCapacity">Vehicle Capacity</label>
              <select id="inputCapacity" class="form-control">
                <option>0-1 Ton</option>
                <option>1-2 Ton</option>
                <option>2-3 Ton</option>
                <option>3-5 Ton</option>
                <option>5-10 Ton</option>
                <option>10-15 Ton</option>
              </select>
            </div>
            <div class="form-group col-md-7 ">
                    <label for="inputCapacity">Vehicle Design</label>
                    <select id="inputCapacity" class="form-control">
                      <option>3 wheeler</option>
                      <option>4 wheeler</option>
                      <option>6 wheeler</option>
                      <option>8 wheeler</option>
                      <option>10 wheeler</option>
                      <option>12 wheeler</option>
                    </select>
                  </div>
          </div>
          <label style="font-size: 2vw" >LIST OF LICENCES AND CERTIFICATES</label>
          <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">All India Permit</label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Driving Licence</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Pollution Check</label>
              </div>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Fitness Certificate</label>
                  </div>

                  <div>
                        <label style="font-size: 2vw" >UPLOAD YOUR VEHICLE PIC HERE</label><br>
                  <input type="file" name="pic" accept="image/*">
                  </div>
                  <div style="text-align: center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Cancel</button>
                </div>
                </form>
    </div>