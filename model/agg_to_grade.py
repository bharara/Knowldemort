#!/usr/bin/env python
import sys
import pickle

def predict_AggToGrade_Single (avg, agg):
	model = pickle.load(open("C:/xampp/htdocs/Knowldemort/model/AggToGrade.sav", 'rb'))
	return model.predict([(agg - avg, agg) ])[0]

x = predict_AggToGrade_Single (float (sys.argv[1]), float(sys.argv[2]))
# x = predict_AggToGrade_Single (77, 63)
print (x)