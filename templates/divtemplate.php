    <header class="bg-primary text-white">
      <div class="container text-center">
        <form id="selection-form" method='post'>
          <div class="form-group">
            <label for="passworddisplay">Generated Password</label>
            <input onclick="select()" value="%s" type="input" class="form-control input-box-center" id="passworddisplay">
          </div>
          <div class="form-group">
            <span class="error text-danger">%s</span>
          </div>
          <div class="form-group">
            <!-- <label for="lengthselect">Length</label> -->
            <select class="custom-select custom-select-sm" id="lengthselect" name="length">
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option selected=>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              <option>32</option>
            </select>
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="upper" id="uppercheck">
              <label class="form-check-label" for="uppercheck">
                Uppercase
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="lower" id="lowercheck">
              <label class="form-check-label" for="lowercheck">
                Lowercase
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="numbers" id="numbercheck">
              <label class="form-check-label" for="numbercheck">
                Numbers
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="special" id="specialcheck">
              <label class="form-check-label" for="specialcheck">
                Special Characters
              </label>
            </div>
          </div>
          <div class="form-group">
            <input class="btn btn-light" name='submit' type="submit" value="Submit">
          </div>
        </form>
        <p class="lead"></p>
      </div>
    </header>